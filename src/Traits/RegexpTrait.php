<?php

namespace Affirm\Traits;

/**
 * Thia trait holds all regular expression related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait RegexpTrait
{

    protected $usZipCodeRegex    = '#^[0-9]{5}(?:-[0-9]{4})?$#';
    protected $caPostalCodeRegex = '#^(?!.*[DFIOQU])[A-VXY][0-9][A-Z]?[0-9][A-Z][0-9]$#';
    protected $ukPostCodeRegex   = '#^[A-Z]{1,2}[0-9RCHNQ][0-9A-Z]?\s?[0-9][ABD-HJLNP-UW-Z]{2}$|^[A-Z]{2}-?[0-9]{4}$#';
    protected $nanpPhoneRegex    = '#^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$#';
    protected $eppPhoneRegex     = '#^\+[0-9]{1,3}\.[0-9]{4,14}(?:x.+)?$#';
    protected $affirmativeRegex  = '#^(?:1|t(?:rue)?|y(?:es)?|ok(?:ay)?)$#';

    public function _url($url)
    {
        return (bool) filter_var($url, FILTER_VALIDATE_URL);
    }

    public function _email($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function _creditCard()
    {

    }

    public function _alphaNumeric()
    {

    }

    public function _timeString()
    {

    }

    public function _dateString()
    {

    }

    public function _usZipCode($zipCode)
    {
        return preg_match($this->usZipCodeRegex, $zipCode) === 1
            ? true
            : false;
    }

    public function _caPostalCode($postalCode)
    {
        return preg_match($this->caPostalCodeRegex, $postalCode) === 1
            ? true
            : false;
    }

    public function _ukPostCode($postCode)
    {
        return preg_match($this->ukPostCodeRegex, $postCode) === 1
            ? true
            : false;
    }

    public function _nanpPhone($nanpPhone)
    {
        return preg_match($this->nanpPhoneRegex, $nanpPhone) === 1
            ? true
            : false;
    }

    public function _eppPhone($eppPhone)
    {
        return preg_match($this->eppPhoneRegex, $eppPhone) === 1
            ? true
            : false;
    }

    public function _affirmative($string)
    {
        return preg_match($this->affirmativeRegex, $string) === 1
            ? true
            : false;
    }

}
