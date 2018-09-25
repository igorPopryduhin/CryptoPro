<?php

use csp\CPCertificate;
use csp\CPCertificates;
use Csp\CPStore;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



include "vendor/autoload.php";

$methods = new CPStore();
$methods->Open(CURRENT_USER_STORE, 'My', STORE_OPEN_READ_ONLY);

/** @var CPCertificates $certificates */
$certificates = $methods->get_Certificates();

/** @var CPCertificates $certs */
$certs = $certificates->Find(CERTIFICATE_FIND_SUBJECT_NAME, 'ADMINISTRATOR', 0);

/** @var CPCertificate $cert */
$cert =  $certs->Item(1);
$certInfo = $cert->GetInfo(CERT_INFO_ISSUER_SIMPLE_NAME );

print_r($certInfo);




//$methods = get_class_methods('CPCertificate');
//
//foreach ( $methods as $item){
//    echo "public function $item()<br>";
//    echo "{<br>";
//    echo "}<br>";
//    echo "<br><br>";
//}








