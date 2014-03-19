    <?php
    /**
    * Standard controller layout.
    *
    * @package WoolyCore
    */
    class CCIndex implements IController {

       /**
        * Implementing interface IController. All controllers must have an index action.
        */
       public function Index() {   
          global $wo;
          $wo->data['title'] = "The Index Controller";
          $wo->data['main'] = "<h1>The Index Controller</h1>";
       }

    } 