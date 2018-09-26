<?php
/**
 * Created by PhpStorm.
 * User: igorp
 * Date: 25.09.2018
 * Time: 3:38
 */

namespace Csp;


class CPCertificates
{

    private $CPCertificates;

    public function __construct ()
    {
        $class = 'CPCertificates';
        $this->CPCertificates = new $class();
    }



    /**
     * Поиск сертификатов <hr>
     * @param $find_type
     * @param $query
     * @param $valid_only
     * @return object CPCertificates
     */
    public function Find($find_type, $query, $valid_only)
    {
        return $this->CPCertificates->Find($find_type, $query, $valid_only);
    }



    /**
     * @param int $index
     * @return object CPCertificate
     */
    public function Item($index)
    {
        return $this->CPCertificates->Item($index);
    }

    /**
     * @return integer
     */
    public function Count()
    {
        return (int)$this->CPCertificates->Count();
    }
}
