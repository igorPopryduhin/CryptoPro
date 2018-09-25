<?php
/**
 * Created by PhpStorm.
 * User: igorp
 * Date: 25.09.2018
 * Time: 3:45
 */

namespace csp;


/**
 * Class CPCertificate
 * @package csp
 */
class CPCertificate
{

    private $CPCertificate;

    public function __construct ()
    {
        $class = 'CPCertificate';
        $this->CPCertificate = new $class();
    }

    /**
     * @param $InfoType
     * @see https://docs.microsoft.com/ru-ru/windows/desktop/SecCrypto/capicom-cert-info-type
     * CERT_INFO_SUBJECT_SIMPLE_NAME    Returns the display name of the certificate subject.
     * CERT_INFO_ISSUER_SIMPLE_NAME    Returns the display name of the issuer of the certificate.
     * CERT_INFO_SUBJECT_EMAIL_NAME    Returns the email address of the certificate subject.
     * CERT_INFO_ISSUER_EMAIL_NAME    Returns the email address of the issuer of the certificate.
     * CERT_INFO_SUBJECT_UPN    Returns the UPN of the certificate subject. Introduced in CAPICOM 2.0.
     * CERT_INFO_ISSUER_UPN    Returns the UPN of the issuer of the certificate. Introduced in CAPICOM 2.0.
     * CERT_INFO_SUBJECT_DNS_NAME    Returns the DNS name of the certificate subject. Introduced in CAPICOM 2.0.
     * CERT_INFO_ISSUER_DNS_NAME    Returns the DNS name of the issuer of the certificate. Introduced in CAPICOM 2.0.
     * @return mixed Info
     */
    public function GetInfo($InfoType)
    {
        return $this->CPCertificate->GetInfo($InfoType);
    }


    public function FindPrivateKey()
    {
    }


    public function HasPrivateKey()
    {
    }


    public function IsValid()
    {
    }


    public function ExtendedKeyUsage()
    {
    }


    public function KeyUsage()
    {
    }


    public function Export()
    {
    }


    public function Import()
    {
    }


    public function get_SerialNumber()
    {
    }


    public function get_Thumbprint()
    {
    }


    public function get_SubjectName()
    {
    }


    public function get_IssuerName()
    {
    }


    public function get_Version()
    {
    }


    public function get_ValidToDate()
    {
    }


    public function get_ValidFromDate()
    {
    }


    public function BasicConstraints()
    {
    }


    public function PublicKey()
    {
    }


    public function PrivateKey()
    {
    }
}

