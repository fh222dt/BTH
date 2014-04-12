 <?php
/**
 * General settings, valid for all page requests
 */
 
// Error reporting
error_reporting(-1);

// Change this to __DIR__ whenever PHP5.3 is supported on production environment
if(!defined('__DIR__')) {
  define('__DIR__', dirname(__FILE__));
}

// The contents of the kmoms navlinks
$data['navkmom'] = array(
  'kmom01'   => array('text'=>'kmom01',  'url'=>'../kmom01'),
  'kmom02'   => array('text'=>'kmom02',  'url'=>'../kmom02'),
  
);

// The contents of the navbar
$data['navbar'] = array(
  'index'         => array('text'=>'Me',  'url'=>'index.php'),
  'report'   => array('text'=>'Redovisning',  'url'=>'report.php'),
  'lekplats'   => array('text'=>'Lekplats',  'url'=>'lekplats.php'),
);
