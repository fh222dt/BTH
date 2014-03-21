<?php
/**
* Parse the request and identify controller, method and arguments.
*
* @package WoolyCore
*/
class CRequest {

  /**
   * Member variables
   */
  public $cleanUrl;
  public $querystringUrl;


  /**
   * Constructor
   *
   * Decide which type of url should be generated as outgoing links.
   * default      = 0      => index.php/controller/method/arg1/arg2/arg3
   * clean        = 1      => controller/method/arg1/arg2/arg3
   * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
   *
   * @param boolean $urlType integer 
   */
  public function __construct($urlType=0) {
    $this->cleanUrl       = $urlType= 1 ? true : false;
    $this->querystringUrl = $urlType= 2 ? true : false;
  }

  /**
   * Parse the current url request and divide it in controller, method and arguments.
   *
   * Calculates the base_url of the installation. Stores all useful details in $this.
   *
   * @param $baseUrl string use this as a hardcoded baseurl.
   */  
  public function Init($baseUrl = null) {
    // Take current url and divide it in controller, method and arguments
    $requestUri = $_SERVER['REQUEST_URI'];
    $scriptPart = $scriptName = $_SERVER['SCRIPT_NAME'];   

    // Check if url is in format controller/method/arg1/arg2/arg3
    if(substr_compare($requestUri, $scriptName, 0, strlen($scriptName))) {
      $scriptPart = dirname($scriptName);
    }
   
    $query = trim(substr($requestUri, strlen(rtrim($scriptPart, '/'))), '/');
    
    $pos = strcspn($query, '?');

    if($pos) {
      $query = substr($query, 0, $pos);
    }

    // Check if this looks like a querystring approach link
    if(substr($query, 0, 1) === '?' && isset($_GET['q'])) {
      $query = trim($_GET['q']);
    }
    $splits = explode('/', $query);
   
    // Set controller, method and arguments
    $controller =  !empty($splits[0]) ? $splits[0] : 'index';
    $method     =  !empty($splits[1]) ? $splits[1] : 'index';
    $arguments = $splits;
    unset($arguments[0], $arguments[1]); // remove controller & method part from argument list
   
    // Prepare to create current_url and base_url
    $currentUrl = $this->GetCurrentUrl();
    $parts       = parse_url($currentUrl);
    $baseUrl     = !empty($baseUrl) ? $baseUrl : "{$parts['scheme']}://{$parts['host']}" . (isset($parts['port']) ? ":{$parts['port']}" : '') . rtrim(dirname($scriptName), '/');
   
    // Store it
    $this->base_url     = rtrim($baseUrl, '/') . '/';
    $this->current_url  = $currentUrl;
    $this->request_uri  = $requestUri;
    $this->script_name  = $scriptName;
    $this->query        = $query;
    $this->splits        = $splits;
    $this->controller    = $controller;
    $this->method        = $method;
    $this->arguments    = $arguments;
  }


  /**
  * Get the url to the current page.
  */
  public function GetCurrentUrl() {
    $url = "http";
    $url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
    $url .= "://";
    $serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
    (($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
    $url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
    return $url;
  }

  /**
  * Create a url in the way it should be created.
  *
  * @param $url string the relative url or the controller
  * @param $method string the method to use, $url is then the controller or empty for current
  * @param $arguments string the extra arguments to send to the method
  */
  public function CreateUrl($url=null, $method=null, $arguments=null) {
      // If fully qualified just leave it.
      if(!empty($url) && (strpos($url, '://') || $url[0] == '/')) {
        return $url;
      }
      
      // Get current controller if empty and method or arguments choosen
      if(empty($url) && (!empty($method) || !empty($arguments))) {
        $url = $this->controller;
      }
      
      // Get current method if empty and arguments choosen
      if(empty($method) && !empty($arguments)) {
        $method = $this->method;
      }
      
      // Create url according to configured style
      $prepend = $this->base_url;
      if($this->cleanUrl) {
        ;
      } elseif ($this->querystringUrl) {
        $prepend .= 'index.php?q=';
      } else {
        $prepend .= 'index.php/';
      }
      $url = trim($url, '/');
      $method = empty($method) ? null : '/' . trim($method, '/');
      $arguments = empty($arguments) ? null : '/' . trim($arguments, '/');
      return $prepend . rtrim("$url$method$arguments", '/');
    }
      
}