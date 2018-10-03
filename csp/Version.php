<?php


namespace Csp;

class Version
{

    private $version;



    /**
     * IVersion constructor.
     */
    public function __construct ()
    {
        $class = 'Version';
        new $class();
    }



    /**
     * @return mixed
     */
    public function get_MajorVersion ()
    {
        return $this->version->get_MajorVersion();
    }



    /**
     * @return mixed
     */
    public function get_MinorVersion ()
    {
        return $this->version->get_MinorVersion();
    }



    /**
     * @return mixed
     */
    public function get_BuildVersion ()
    {
        return $this->version->get_BuildVersion();
    }



    /**
     * @return mixed
     */
    public function toString ()
    {
        return $this->version->toString();
    }
}