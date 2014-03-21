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
  'kmom03'   => array('text'=>'kmom03',  'url'=>'../kmom03'),
  'kmom04'   => array('text'=>'kmom04',  'url'=>false),
);

// The contents of the navbar
$data['navbar'] = array(
  'index'         => array('text'=>'Me',  'url'=>'index.php'),
  'report'   => array('text'=>'Redovisning',  'url'=>'report.php'),
  'Wooly'   => array('text'=>'Wooly',  'url'=>'wooly.php'),
  'viewsource'    => array('text'=>'Källkod', 'url'=>'viewsource.php'),
);
