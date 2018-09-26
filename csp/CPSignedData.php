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
    public function Sign($singer, $detached, $encoding_type)
    {
        return $this->CPSignedData->Sign($singer, $detached, $encoding_type);
    }


    public function CoSign()
    {
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
     * Определяет действительность подписи или подписей.
     * @param $SignedMessage
     * @param $bDetached
     * @param $VerifyFlag
     * @return void
     */
    public function Verify($SignedMessage, $bDetached , $VerifyFlag)
    {
        $this->CPSignedData->Verify($SignedMessage, $bDetached , $VerifyFlag);
    }


    public function set_ContentEncoding()
    {
    }


    public function get_ContentEncoding()
    {
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

    }


    /**
     * @return object CPSigners
     */
    public function get_Signers()
    {
        return $this->CPSignedData->get_Signers();
    }


    public function get_Certificates()
    {
    }


}