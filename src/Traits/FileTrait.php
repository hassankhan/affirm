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
     * Checks if `$file` is a valid file
     *
     * @param  mixed    $file
     *
     * @return boolean  True if valid file, false otherwise
     */
    public function _file($file)
    {
        return is_file($file);
    }

    /**
     * Checks if `$directory` is a valid directory
     *
     * @return boolean  True if valid directory, false otherwise
     */
    public function _directory($directory)
    {
        return is_dir($directory);
    }

    /**
     * Checks if `$filename` is a readable file
     *
     * @return boolean  True if readable, false otherwise
     */
    public function _readable($filename)
    {
        return is_readable($filename);
    }

    /**
     * Checks if `$filename` is a writable file
     *
     * @return boolean  True if writable, false otherwise
     */
    public function _writable($filename)
    {
        return is_writable($filename);
    }

}
