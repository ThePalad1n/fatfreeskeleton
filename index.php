<?php
/**
 * composer auto loader
*/

require('vendor/autoload.php');

/**
 * Create f3
 */
$f3 = \Base::instance();

/**
 * Start session
 */
new Session();


/**
 * load config files
 */

 $f3->config('config/config.ini');
 $f3->config('config/routes.ini');

 /**
  * start session
  */
  $f3->run();