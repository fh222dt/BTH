<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <meta name="description" content="<?=$meta_description?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='shortcut icon' href='favicon.ico'/>

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory-->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
  <style>
    <?=$style?>
  </style> 
</head>
<body>
  <!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please 
  <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <header id="above">
    <?=getHTMLForKmomNavlinks($navkmom, "nav-kmom")?>
  </header>

  <header id="header">
    <div id="banner">
      <a href="index.php">
        <img class="site-logo" src="img/logo.png" alt="logo" />
      </a>
      <p class="site-title">phpmvc</p>
      <p class="site-slogan">Att koda ett PHP-baserat och MVC-inspirerat ramverk</p>
    </div>
    <?=getHTMLForNavigation($navbar, "navbar")?>
  </header>
  
  <div id="main" role="main">
    <?=$main?>
  </div>

  <footer id="footer">
    <p>&copy; Frida Holmström | Validering:     
      <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
    </p>    
  </footer>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
</body>
</html> 