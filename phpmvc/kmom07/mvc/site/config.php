<?php
/**
* Site configuration, this file is changed by user per site.
*
*/

/*
* Set level of error reporting
*/
error_reporting(-1);
ini_set('display_errors', 1);

/*
* Define session name
*/
$wo->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);

/*
* Define server timezone
*/
$wo->config['timezone'] = 'Europe/Stockholm';

/*
* Define internal character encoding
*/
$wo->config['character_encoding'] = 'UTF-8';

/*
* Define language
*/
$wo->config['language'] = 'en';

/**
* Define the controllers, their classname and enable/disable them.
*
* The array-key is matched against the url, for example:
* the url 'developer/dump' would instantiate the controller with the key "developer", that is
* CCDeveloper and call the method "dump" in that class. This process is managed in:
* $wo->FrontControllerRoute();
* which is called in the frontcontroller phase from index.php.
*/
$wo->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
  'content'   => array('enabled' => true,'class' => 'CCContent'),
  'blog'      => array('enabled' => true,'class' => 'CCBlog'),
  'page'      => array('enabled' => true,'class' => 'CCPage'),
  'theme'     => array('enabled' => true,'class' => 'CCTheme'),
  'modules'    => array('enabled' => true,'class' => 'CCModules'),
);


/**
* Settings for the theme.
*/
$wo->config['theme'] = array(
  'name' => 'grid', // The name of the theme in the theme directory
  'stylesheet' => 'style.php', // Main stylesheet to include in template files
  'template_file'   => 'index.tpl.php',   // Default template file, else use default.tpl.php

  // A list of valid theme regions
  'regions' => array('flash','featured-first','featured-middle','featured-last',
    'primary','sidebar','triptych-first','triptych-middle','triptych-last',
    'footer-column-one','footer-column-two','footer-column-three','footer-column-four',
    'footer',
  ),

  // Add static entries for use in the template file.
      'data' => array(
        'header' => 'Wooly',
        'slogan' => 'A PHP-based MVC-inspired CMF',
        'favicon' => 'logo.png',
        'logo' => 'logo.png',
        'logo_width'  => 80,
        'logo_height' => 80,
        'footer' => '<p>&copy; Wooly by Frida Holmström 2014</p>',
      ),
);

/**
* Set a base_url to use another than the default calculated
*/
$wo->config['base_url'] = null;

/**
* What type of urls should be used?
*
* default      = 0      => index.php/controller/method/arg1/arg2/arg3
* clean        = 1      => controller/method/arg1/arg2/arg3
* querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
*/
$wo->config['url_type'] = 1;

/**
* Set what to show as debug or developer information in the get_debug() theme helper.
*/
$wo->config['debug']['display-wooly'] = true;

/**
* Set database(s).
*/
$wo->config['database'][0]['dsn'] = 'sqlite:' . WOOLY_SITE_PATH . '/data/.ht.sqlite';

/**
* Set what to show as debug or developer information in the get_debug() theme helper.
*/
$wo->config['debug']['wooly'] = false;
$wo->config['debug']['db-num-queries'] = true;
$wo->config['debug']['db-queries'] = true;
$wo->config['debug']['session'] = true;
$wo->config['debug']['timer'] = true;

/**
* Set session key
*/
$wo->config['session_key']  = 'wooly';

/**
* How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
*/
$wo->config['hashing_algorithm'] = 'sha1salt';

/**
* Allow or disallow creation of new user accounts.
*/
$wo->config['create_new_users'] = true;

