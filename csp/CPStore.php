<?php
/**
 * Created by PhpStorm.
 * User: igorp
 * Date: 25.09.2018
 * Time: 1:16
 */

namespace Csp;



/**
 * Class CPStore
 * @package Csp
 */
class CPStore
{


    private $CPStore;

    /**
     * CPStore constructor.
     */
    public function __construct ()
    {
        $class = 'CPStore';
        $this->CPStore = new $class();
    }

    /**
     * @param $location
     * @param $name
     * @param $mode
     */
    public function Open ($location, $name, $mode)
    {
        $this->CPStore->Open($location, $name, $mode);
    }

    /**
     * Close
     */
    public function Close ()
    {
        $this->CPStore->Close();
    }

    /**
     * @return object CPCertificates
     */
    public function get_Certificates ()
    {
        return $this->CPStore->get_Certificates();
    }

    /**
     *
     */
    public function get_Location ()
    {
        return $this->CPStore->get_Location();
    }

    /**
     *
     */
    public function get_Name ()
    {
        return $this->CPStore->get_Name();
    }
}