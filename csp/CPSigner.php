<?php


namespace Csp;


class CPSigner
{
    private $CPSigner;

    public function __construct()
    {
        $class = 'CPSigner';
        $this->CPSigner = new $class();
    }


    public function get_Certificate()
    {
    }


    /**
     * Установить сертификат
     * @param $cert CPCertificate
     */
    public function set_Certificate($cert)
    {
        $this->CPSigner->set_Certificate($cert);
    }


    public function get_Options()
    {
    }


    public function set_Options()
    {
    }


    public function get_AuthenticatedAttributes()
    {
    }


    public function get_UnauthenticatedAttributes()
    {
    }



    /**
     * Получить адрес службы штампов времени
     * @return string
     */
    public function get_TSAAddress()
    {
        return $this->CPSigner->get_TSAAddress();
    }



    /**
     * Установить адрес службы штампов времени.
     * @param $tspAddress
     */
    public function set_TSAAddress($tspAddress)
    {
        $this->CPSigner->set_TSAAddress($tspAddress);
    }



    public function get_CRLs()
    {
        return $this->CPSigner->get_CRLs();
    }


    /**
     * @return array
     */
    public function get_OCSPResponses()
    {
        return (array)$this->CPSigner->get_OCSPResponses();
    }


    public function get_SigningTime()
    {
        return $this->CPSigner->get_SigningTime();
    }


    public function get_SignatureTimeStampTime()
    {
        return $this->CPSigner->get_SignatureTimeStampTime();
    }


    public function set_KeyPin()
    {
    }


}