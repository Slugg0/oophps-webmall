<?php 
/**
 * This is a Oophps pagecontroller.
 * 
 */
// Include the essential config-file which also creates the $oophps variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the oophps container.
$oophps['title'] = "Hello World";
 
$oophps['header'] = <<<EOD
<img class='siteLogo' src='img/oophps.png' alt='oophps Logo'/>
<div id="siteHead">
<span class='siteTitle'>oophps webbtemplate</span>
<span class='siteSlogan'>Återanvändbara moduler för webbutveckling med PHP</span>
</div>
EOD;
 
$oophps['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Oophps ser ut och fungerar.</p>
EOD;
 
$oophps['footer'] = <<<EOD
<footer><span class='siteFooter'>Skapad av Stefan Ros |  | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Oophps.
include(OOPHPS_THEME_PATH);