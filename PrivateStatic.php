<?php
class PrivateStatic
{
    const SOME_CONST = 13;
    private static $privateStaticVarArray = ['a', 'b', 'c'];
    private static $otherStatic;
    public static function init()
    {
        self::$otherStatic = self::$privateStaticVarArray;
    }
}
PrivateStatic::init();



