<?php

/*
  
  - - - www.caribecoders.com, www.luistoscano.com - - -

  Example for PHP Printing with PHP::PrintIPP Class
	easy to use, download de PrintIPP.php class
	http://www.nongnu.org/phpprintipp/

*/

  
require_once('php_classes/PrintIPP.php');

try {
	$ipp = new PrintIPP();                        
	$ipp->setHost("192.168.40.16");
	$ipp->setPrinterURI("/printers/HP_LaserJet_Professional_M1212nf_MFP");
    $ipp->setAttribute('media','A4'); // very little pages
	$ipp->setAttribute("cpi",18);
	$ipp->setData("filename.pdf"); // Path to file.
	$ipp->printJob('laPrueba');   
} catch (Exception $e) {
	echo $e;
}	
   

?>
