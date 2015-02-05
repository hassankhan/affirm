<?php

namespace Affirm\Traits;

/**
 * This trait holds all array-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait FileTrait
{

    /**
     * Checks if `$path` is a valid file
     *
     * @param  mixed    $path
     *
     * @return boolean  True if valid file, false otherwise
     */
    public function _file($path)
    {
        return is_file($path);
    }

    /**
     * Checks if `$path` is a valid directory
     *
     * @return boolean  True if valid directory, false otherwise
     */
    public function _dir($path)
    {
        return is_dir($path);
    }

    /**
     * Checks if `$path` is a readable file
     *
     * @return boolean  True if readable, false otherwise
     */
    public function _readable($path)
    {
        return is_readable($path);
    }

    /**
     * Checks if `$path` is a writable file
     *
     * @return boolean  True if writable, false otherwise
     */
    public function _writable($path)
    {
        return is_writable($path);
    }

}
