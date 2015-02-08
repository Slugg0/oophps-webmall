<?php
/**
 * Config-file for Oophps. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Oophps paths.
 *
 */
define('OOPHPS_INSTALL_PATH', __DIR__ . '/..');
define('OOPHPS_THEME_PATH', OOPHPS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(OOPHPS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Oophps variable.
 *
 */
$oophps = array();
 
 
/**
 * Site wide settings.
 *
 */
$oophps['lang']         = 'sv';
$oophps['title_append'] = ' | Oophps en webbtemplate';

/**
 * Theme related settings.
 *
 */
$oophps['stylesheets'] = array('css/style.css');
$oophps['favicon']    = 'favicon.ico';
/* $filnamn = htmlentities(basename(__FILE__)); */
$file = basename($_SERVER['SCRIPT_FILENAME']);
/**
 * Navbar menu
 *
 */
//$oophps['navbar'] = null; // To skip the navbar
$oophps['navbar'] = array(
  'class' => 'nb-plain',
  'menuItems' => array(
  'home'  => array('text'=>'Start',			'url'=>'me.php',		'title'=>'Lite om mig'),
  'away'  => array('text'=>'Redovisningar',	'url'=>'reports.php', 	'title'=>'Redovisningar'),
  'about' => array('text'=>'K&auml;llkod',	'url'=>'csource.php',		'title'=>'Källkod'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);

/**
 * Header for the entire site
 *
 */
$oophps['header'] = <<<EOD
<img class='siteLogo' src='img/oophps.png' alt='oophps Logo'/>
<div id="siteHead">
<span class='siteTitle'>oophps webbtemplate</span>
<span class='siteSlogan'>Återanvändbara moduler för webbutveckling med PHPs</span>
</div>
EOD;


/**
 * Byline for every page.
 * To place this manually instead, remove <div id='byline'><?=$byline?></div> from index.tp.php and put {$oophps['byline']} at the end of the articles
 */
$oophps['byline'] = <<<EOD
<footer class="byline">
<figure class="right"> <img class="avatarHeight" src="img/me.jpg" alt="En flummig bild på Stefan"> <figcaption> <p>En gammal flummig bild på Stefan </p> </figcaption></figure>
<div class="centerTextBox">
<p>Stefan pluggar webbutveckling vid Blekinge Tekniska högskola och hoppas kunna stå helt på egna ben vad gäller webbprogrammering efter avslutad kurs.</p>
</div></footer>
EOD;

/**
 * Footer for the entire site
 *
 */
$oophps['footer'] = <<<EOD
<footer><span class='siteFooter'>Skapad av Stefan Ros | <a href="csource.php?path=webroot/{$file}">Källkod</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

