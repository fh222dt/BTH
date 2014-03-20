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

   /**
    * Constructor
    */
   protected function __construct() {
    $wo = CWooly::Instance();
    $this->config   = &$wo->config;
    $this->request  = &$wo->request;
    $this->data     = &$wo->data;
    $this->db       = &$wo->db;
  }

}