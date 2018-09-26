<?php

use Csp\CPCertificate;
use Csp\CPCertificates;
use Csp\CPSignedData;
use Csp\CPSigner;
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

/** @var CPSigner $signer */
$class = "CPSigner";
$signer = new $class();
$signer->set_TSAAddress('http://testca.cryptopro.ru/tsp/tsp.srf');
$signer->set_Certificate($cert);

/** @var CPSignedData $sd */
$sd = new CPSignedData();
$sd->set_Content('my content');


$sm = $sd->Sign($signer, 0, STRING_TO_UCS2LE);

$sd->Verify($sm, 0, VERIFY_SIGNATURE_ONLY);
echo "Verify ok <br>";



$methods = get_class_methods('CPStore');

foreach ( $methods as $item){
    echo "public function $item()<br>";
    echo "{<br>";
    echo "}<br>";
    echo "<br><br>";
}








