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
    * Render all views.
    */
    function render_views() {
      return CWooly::Instance()->views->Render();
    }