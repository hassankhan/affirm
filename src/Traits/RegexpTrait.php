<?php

namespace Affirm\Traits;

/**
 * This trait holds all regular expression related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait RegexpTrait
{

    protected $creditCardRegex   = '#(?:(4[0-9]{12}(?:[0-9]{3})?)|(5[1-5][0-9]{14})|(6(?:011|5[0-9]{2})[0-9]{12})|(3[47][0-9]{13})|(3(?:0[0-5]|[68][0-9])[0-9]{11})|((?:2131|1800|35[0-9]{3})[0-9]{11}))#';
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

    public function _creditCard($cardNumber)
    {
        return preg_match($this->creditCardRegex, $cardNumber) === 1
            ? true
            : false;
    }

    public function _alphaNumeric($string)
    {
        return ctype_alnum($string);
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
