<?php
/**
 * ZeroBin
 *
 * a zero-knowledge paste bin
 *
 * @link      http://sebsauvage.net/wiki/doku.php?id=php:zerobin
 * @copyright 2012 Sébastien SAUVAGE (sebsauvage.net)
 * @license   http://www.opensource.org/licenses/zlib-license.php The zlib/libpng License
 * @version   0.15
 */

spl_autoload_register('auto::loader');

/**
 * auto
 *
 * provides autoloading functionality
 */
class auto
{
    /**
     * strips slashes deeply
     *
     * @access public
     * @static
     * @param  mixed $value
     * @return mixed
     */
    public static function loader($class_name)
    {
        require_once PATH . 'lib/' . str_replace('_', '/', $class_name) . '.php';
    }
}

