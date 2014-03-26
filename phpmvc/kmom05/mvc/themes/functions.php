<?php
/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/

    /**
* Print debuginformation from the framework.
*/
function get_debug() {
  $wo = CWooly::Instance(); 
  $html = null;
  if(isset($wo->config['debug']['db-num-queries']) && $wo->config['debug']['db-num-queries'] && isset($wo->db)) {
    $html .= "<p>Database made " . $wo->db->GetNumQueries() . " queries.</p>";
  }   
  if(isset($wo->config['debug']['db-queries']) && $wo->config['debug']['db-queries'] && isset($wo->db)) {
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $wo->db->GetQueries()) . "</pre>";
  }   
  if(isset($wo->config['debug']['lydia']) && $wo->config['debug']['lydia']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CLydia:</p><pre>" . htmlent(print_r($wo, true)) . "</pre>";
  }   
  return $html;
}



/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CWooly::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return CWooly::Instance()->request->current_url;
}

/**
* Create a url to an internal resource.
*
* @param string the whole url or the controller. Leave empty for current controller.
* @param string the method when specifying controller as first argument, else leave empty.
* @param string the extra arguments to the method, leave empty if not using method.
*/
function create_url($urlOrController=null, $method=null, $arguments=null) {
  return CWooly::Instance()->request->CreateUrl($urlOrController, $method, $arguments);
}

/**
* Render all views.
*/
function render_views() {
  return CWooly::Instance()->views->Render();
}

/**
* Get messages stored in flash-session.
*/
function get_messages_from_session() {
  $messages = CWooly::Instance()->session->GetMessages();
  $html = null;
  if(!empty($messages)) {
    foreach($messages as $val) {
      $valid = array('info', 'notice', 'success', 'warning', 'error', 'alert');
      $class = (in_array($val['type'], $valid)) ? $val['type'] : 'info';
      $html .= "<div class='$class'>{$val['message']}</div>\n";
    }
  }
  return $html;
}

/**
* Get a gravatar based on the user's email.
*/
function get_gravatar($size=null) {
  return 'http://www.gravatar.com/avatar/' . md5(strtolower(trim(CWooly::Instance()->user['email']))) . '.jpg?' . ($size ? "s=$size" : null);
}

/**
* Login menu. Creates a menu which reflects if user is logged in or not.
*/
function login_menu() {
  $wo = CWooly::Instance();
  if($wo->user['isAuthenticated']) {
    $items = "<a href='" . create_url('user/profile') . "'><img class='gravatar' src='" . get_gravatar(20) . "' alt=''> " . $wo->user['acronym'] . "</a> ";
    if($wo->user['hasRoleAdministrator']) {
      $items .= "<a href='" . create_url('acp') . "'>acp</a> ";
    }
    $items .= "<a href='" . create_url('user/logout') . "'>logout</a> ";
  } else {
    $items = "<a href='" . create_url('user/login') . "'>login</a> ";
  }
  return "<nav id='login-menu'>$items</nav>";
}

/**
* Escape data to make it safe to write in the browser.
*/
function esc($str) {
  return htmlEnt($str);
}