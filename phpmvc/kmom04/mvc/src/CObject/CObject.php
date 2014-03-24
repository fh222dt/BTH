<?php
/**
* Holding a instance of CWooly to enable use of $this in subclasses.
*
* @package WoolyCore
*/
class CObject {

   public $config;
   public $request;
   public $data;
   public $db;
   public $views;
   public $session;
   public $user;

   /**
    * Constructor
    */
   protected function __construct($wo=null) {
    if(!$wo) {
      $wo = CWooly::Instance();
    } 
    $this->config   = &$wo->config;
    $this->request  = &$wo->request;
    $this->data     = &$wo->data;
    $this->db       = &$wo->db;
    $this->views    = &$wo->views;
    $this->session  = &$wo->session;
    $this->user     = &$wo->user;
  }

  /**
  * Redirect to another url and store the session
  */
  protected function RedirectTo($urlOrController=null, $method=null) {
    $wo = CWooly::Instance();
    if(isset($this->config['debug']['db-num-queries']) && $this->config['debug']['db-num-queries'] && isset($this->db)) {
      $this->session->SetFlash('database_numQueries', $this->db->GetNumQueries());
    }
    if(isset($this->config['debug']['db-queries']) && $this->config['debug']['db-queries'] && isset($this->db)) {
      $this->session->SetFlash('database_queries', $this->db->GetQueries());
    }
    if(isset($this->config['debug']['timer']) && $this->config['debug']['timer']) {
        $this->session->SetFlash('timer', $wo->timer);
    }
    $this->session->StoreInSession();
    header('Location: ' . $this->request->CreateUrl($urlOrController, $method));
  }

 /**
  * Redirect to a method within the current controller. Defaults to index-method. 
  * Uses RedirectTo().
  *
  * @param string method name the method, default is index method.
  */
  protected function RedirectToController($method=null) {
    $this->RedirectTo($this->request->controller, $method);
  }


  /**
  * Redirect to a controller and method. Uses RedirectTo().
  *
  * @param string controller name the controller or null for current controller.
  * @param string method name the method, default is current method.
  */
  protected function RedirectToControllerMethod($controller=null, $method=null) {
  $controller = is_null($controller) ? $this->request->controller : null;
  $method = is_null($method) ? $this->request->method : null; 
      $this->RedirectTo($this->request->CreateUrl($controller, $method));
  }

  /**
  * Save a message in the session. Uses $this->session->AddMessage()
  *
  * @param $type string the type of message, for example: notice, info, success, warning, error.
  * @param $message string the message.
  * @param $alternative string the message if the $type is set to false, defaults to null.
  */
  protected function AddMessage($type, $message, $alternative=null) {
    if($type === false) {
      $type = 'error';
      $message = $alternative;
    } else if($type === true) {
      $type = 'success';
    }
    $this->session->AddMessage($type, $message);
  }

  /**
  * Create an url. Uses $this->request->CreateUrl()
  *
  * @param $urlOrController string the relative url or the controller
  * @param $method string the method to use, $url is then the controller or empty for current
  * @param $arguments string the extra arguments to send to the method
  */
  protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
      $this->request->CreateUrl($urlOrController, $method, $arguments);
    }
}