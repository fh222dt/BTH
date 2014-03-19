<?php
/**
* Main class for Wooly, holds everything.
*
* @package CWoolyCore
*/
class CWooly implements ISingleton {

   private static $instance = null;

   /**
    * Singleton pattern. Get the instance of the latest created object or create a new one.
    * @return CWooly The instance of this class.
    */
   public static function Instance() {
      if(self::$instance == null) {
         self::$instance = new CWooly();
      }
      return self::$instance;
   }

   /**
    * Constructor
    */
   protected function __construct() {
      // include the site specific config.php and create a ref to $wo to be used by config.php
      $wo = &$this;
      require(WOOLY_SITE_PATH.'/config.php');

        // Start a named session
        session_name($this->config['session_name']);
        session_start();
   }

    /**
    * Frontcontroller, check url and route to controllers.
    */
  /*public function FrontControllerRoute() {
    $this->data['debug']  = "REQUEST_URI - {$_SERVER['REQUEST_URI']}\n";
    $this->data['debug'] .= "SCRIPT_NAME - {$_SERVER['SCRIPT_NAME']}\n";
  }*/

  /**
    * Frontcontroller, check url and route to controllers.
    */
  public function FrontControllerRoute() {
    // Step 1
    // Take current url and divide it in controller, method and parameters
    $this->request = new CRequest();
    $this->request->Init($this->config['base_url']);
    $controller = $this->request->controller;
    $method     = $this->request->method;
    $arguments  = $this->request->arguments;

    // Is the controller enabled in config.php?
    $controllerExists    = isset($this->config['controllers'][$controller]);
    $controllerEnabled    = false;
    $className             = false;
    $classExists           = false;

    if($controllerExists) {
      $controllerEnabled    = ($this->config['controllers'][$controller]['enabled'] == true);
      $className               = $this->config['controllers'][$controller]['class'];
      $classExists           = class_exists($className);
    }

    // Step 2
    // Check if there is a callable method in the controller class, if then call it
    if($controllerExists && $controllerEnabled && $classExists) {
      $rc = new ReflectionClass($className);
      
        if($rc->implementsInterface('IController')) {
            $formattedMethod = str_replace(array('_', '-'), '', $method);
            
            if($rc->hasMethod($formattedMethod)) {
              $controllerObj = $rc->newInstance();
              $methodObj = $rc->getMethod($formattedMethod);
              $methodObj->invokeArgs($controllerObj, $arguments);
            } 
            else {
              die("404. " . get_class() . ' error: Controller does not contain method.');
            }

        }
        else {
          die('404. ' . get_class() . ' error: Controller does not implement interface IController.');
        }
    }
    else {
      die('404. Page is not found.');
    }

  }

  /**
    * Theme Engine Render, renders the views using the selected theme.
    */
  public function ThemeEngineRender() {
    /*echo "<h1>I'm CLydia::ThemeEngineRender</h1><p>You are most welcome. Nothing to render at the moment</p>";
    echo "<h2>The content of the config array:</h2><pre>", print_r($this->config, true) . "</pre>";
    echo "<h2>The content of the data array:</h2><pre>", print_r($this->data, true) . "</pre>";
    echo "<h2>The content of the request array:</h2><pre>", print_r($this->request, true) . "</pre>";*/

    // Get the paths and settings for the theme
    $themeName    = $this->config['theme']['name'];
    $themePath    = WOOLY_INSTALL_PATH . "/themes/{$themeName}";
    $themeUrl      = $this->request->base_url . "themes/{$themeName}";
   
    // Add stylesheet path to the $wo->data array
    $this->data['stylesheet'] = "{$themeUrl}/style.css";

    // Include the global functions.php and the functions.php that are part of the theme
    $wo = &$this;
    include (WOOLY_INSTALL_PATH . '/themes/functions.php');
    $functionsPath = "{$themePath}/functions.php";
    if(is_file($functionsPath)) {
      include $functionsPath;
    }

    // Extract $wo->data to own variables and handover to the template file
    extract($this->data);     
    include("{$themePath}/default.tpl.php");    
  }
}