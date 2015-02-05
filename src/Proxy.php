<?php

namespace Affirm;

/**
 * Affirm proxy class
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
class Proxy extends \Frontman\Proxy
{
    public static function getRealClass()
    {
        return 'Affirm\Affirm';
    }
}
