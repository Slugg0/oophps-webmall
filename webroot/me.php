<?php 
/**
 * This is a Oophps pagecontroller.
 * 
 */
// Include the essential config-file which also creates the $oophps variable with its defaults.
include(__DIR__.'/config.php'); 

 
 
// Do it and store it all in variables in the oophps container.
$oophps['title'] = "Om mig";
 
$oophps['main'] = <<<EOD
<article class="justify readable" >
  <h1>Lite om mig</h1>
  <p>Stefan var namnet, 30 år var åldern. 
  Bor strax utanför Göteborg, men är uppväxt i Stockholm. 
  Jobbar som truckförare på ett transportföretag nattetid och spenderar dagarna med min son (9 månader gammal i skrivande stund), min sambo och 2 katter.</p>
  
  <p>Har ett mycket brett intresseområde och högst upp på listan står elektronik och teknik. Har alltid haft ett intresse för programmering och var relativt bra på (självlärd) HTML vid 13-16års ålder. 
  På senare tid har intresset för detta börjat vakna till liv igen och HT-13 läste jag en kurs om &Prime;Apputveckling för Android&Prime;, vilket kickstartade programmerings- och studieintresset en del.</p>
  <p>Har just gått kursen HTMLPHP här på BTH och hoppas jag lyckas hänga med i denna och kommande kurser i programpaketet också.
  
  <p>Mina förhoppningar med denna utbildning är att kunna återuppta, uppdatera och utveckla de kunskaper jag hade för länge sedan vad gäller webbprogrammering och förhoppningsvis, efter avslutad utbildning kunna skapa en webshop till ett företag m.m.</p>
</article>
EOD;
 
// Finally, leave it all to the rendering phase of Oophps.
include(OOPHPS_THEME_PATH);