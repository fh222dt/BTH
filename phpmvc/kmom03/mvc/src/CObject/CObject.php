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

   /**
    * Constructor
    */
   protected function __construct() {
    $wo = CWooly::Instance();
    $this->config   = &$wo->config;
    $this->request  = &$wo->request;
    $this->data     = &$wo->data;
    $this->db       = &$wo->db;
    $this->views    = &$wo->views;
    $this->session  = &$wo->session;
  }

  /**
  * Redirect to another url and store the session
  */
  protected function RedirectTo($url) {
      $wo = CWooly::Instance();
      if(isset($wo->config['debug']['db-num-queries']) && $wo->config['debug']['db-num-queries'] && isset($wo->db)) {
        $this->session->SetFlash('database_numQueries', $this->db->GetNumQueries());
      }
      if(isset($wo->config['debug']['db-queries']) && $wo->config['debug']['db-queries'] && isset($wo->db)) {
        $this->session->SetFlash('database_queries', $this->db->GetQueries());
      }
      if(isset($wo->config['debug']['timer']) && $wo->config['debug']['timer']) {
        $this->session->SetFlash('timer', $wo->timer);
      }
      $this->session->StoreInSession();
      header('Location: ' . $this->request->CreateUrl($url));
  }
}