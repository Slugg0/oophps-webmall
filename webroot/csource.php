<?php 
/**
 * This is a Oophps pagecontroller.
 * 
 */
// Include the essential config-file which also creates the $oophps variable with its defaults.
include(__DIR__.'/config.php'); 

// Add style for csource
$oophps['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the oophps container.
$oophps['title'] = "Visa källkod";
$oophps['main'] = "<h1>Visa källkod</h1>\n" . $source->View();
 
// Finally, leave it all to the rendering phase of Oophps.
include(OOPHPS_THEME_PATH);