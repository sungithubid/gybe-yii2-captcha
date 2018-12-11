<?php
/**
 * Created by PhpStorm.
 * Date: 2018/12/11
 * Time: 下午2:12
 */

namespace gybe\captcha\equations;


class SimpleAddSub
{
    protected static function format($code)
    {
        $a = $code[1] + $code[2] + $code[5];
        $b = $code[3] + $code[4] + 4;
        $c = $code[2] + $code[4] + $code[5] + 2;

        return [$a, $b, $c];
    }

    public static function getExpresion($code)
    {
        list($a, $b, $c) = static::format($code);
        return "{$a}+{$b}-{$c}";
    }

    public static function getValue($code)
    {
        list($a, $b, $c) = static::format($code);
        return $a + $b - $c;
    }

}