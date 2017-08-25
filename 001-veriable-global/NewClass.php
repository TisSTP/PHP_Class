<?php

class NewClass
{
    private static $count = 0;

    /**
     * @return int
     */
    public static function getCount()
    {
        return self::$count;
    }

    /**
     * @param int $count
     */
    public static function setCount()
    {
        self::$count++;
    }


}