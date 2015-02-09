<?php
/**
 * Bootstrapping functions, essential and needed for Oophps to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Oophps: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');
 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = OOPHPS_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

/**
 * Autoloader for classes
 * from "Beginning PHP and MySQL" -NOT YET TESTED BY ME!
 */
/*
function __autoload($class){
  require_once("src/$class.php");
}
*/

/** Function to display the content of an array.
 * Use it by calling i.e. <?php echo "dump($array)"; ?> or <?=dump($SERVER)?>
 *
 */

/** Function to display the content of an array.
 * Use it by calling i.e. <?php echo "dump($array)"; ?> or <?=dump($SERVER)?>
 *
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}


/**
 * Get the url to the current page. 
 *
 * @return string as the url to the current page.
 * 
 * Use it by calling $url = getCurrentUrl();
 */
function getCurrentUrl() {
  $url = "http";
  $url .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
  $url .= "://";
  $serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
    (($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? '' : ":{$_SERVER['SERVER_PORT']}");
  $url .= $_SERVER["SERVER_NAME"] . $serverPort . htmlspecialchars($_SERVER["REQUEST_URI"]);
  return $url;
}