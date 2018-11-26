<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 2018/9/14
 * Time: 11:39
 * Des:
 */

namespace App\Repositories;


class RegisterRepository
{
    protected static $objects;

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($key)
    {
        if (!isset(self::$objects[$key]))
        {
            return false;
        }
        return self::$objects[$key];
    }
    public function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}