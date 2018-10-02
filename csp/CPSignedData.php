<?php
/**
 * Created by PhpStorm.
 * User: igorp
 * Date: 25.09.2018
 * Time: 4:45
 */

namespace Csp;


class CPSignedData
{

    private $CPSignedData;

    /**
     * CPSignedData constructor.
     */
    public function __construct()
    {
        $class = 'CPSignedData';
        $this->CPSignedData = new $class();
    }


    public function SignCades()
    {
    }


    public function SignHash()
    {
    }


    /**
     * Создает цифровую подпись для подписываемого содержимого.
     * @param $singer
     * @param int $detached
     * @param int $encoding_type
     * @return string
     */
    public function Sign($singer, $detached, $encoding_type = STRING_TO_UCS2LE )
    {
        return $this->CPSignedData->Sign($singer, $detached, $encoding_type );
    }


    public function CoSign($singer, $detached = 0)
    {
        return $this->CPSignedData->CoSign($singer, $detached);
    }


    public function CoSignCades()
    {
    }




    public function CoSignHash()
    {
    }


    public function EnhanceCades()
    {
    }


    public function VerifyCades()
    {
    }


    public function VerifyHash()
    {
    }


    /**
     * @param $SignedMessage
     * @param $bDetached
     * @param $VerifyFlag
     * @return mixed
     */
    public function Verify($SignedMessage, $bDetached = 0, $VerifyFlag)
    {
        $this->CPSignedData->Verify($SignedMessage, $bDetached , $VerifyFlag);
    }


    public function set_ContentEncoding($contentEncoding)
    {
        $this->CPSignedData->set_ContentEncoding($contentEncoding);
    }


    public function get_ContentEncoding()
    {
        return $this->CPSignedData->get_ContentEncoding();
    }


    /**
     * Контент для подписи
     * @param $content
     */
    public function set_Content($content)
    {
        $this->CPSignedData->set_Content($content);
    }


    /**
     */
    public function get_Content()
    {
        return $this->CPSignedData->get_Content();
    }


    /**
     * @return object CPSigners
     */
    public function get_Signers()
    {
        return $this->CPSignedData->get_Signers();
    }


    /**
     * @return object CPSignedData
     */
    public function get_Certificates()
    {
        return $this->CPSignedData->get_Certificates();
    }


}