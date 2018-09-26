<?php
/**
 * Created by PhpStorm.
 * User: igorp
 * Date: 25.09.2018
 * Time: 4:59
 */

namespace Csp;



/**
 * Объект CPSigners предоставляет интерфейс аналогичный CAPICOM.Signers .
 * @see http://cpdn.cryptopro.ru/default.asp?url=content/cades/class_c_ad_e_s_c_o_m_1_1_c_p_signers.html
 * Class CPSigners
 * @package Csp
 */
abstract class CPSigners
{


    /**
     * Number of Signer objects in the collection.
     * @return mixed
     */
    abstract public function get_Count();

    /**
     * Retrieves the Signer object that represents the indexed signer. This is the default property.
     * @return mixed
     */
    abstract public function get_Item();


}