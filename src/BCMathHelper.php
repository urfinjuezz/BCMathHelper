<?php
/**
 * Created by PhpStorm.
 * User: urfinjuezz
 * Date: 21.07.18
 * Time: 14:06
 */

namespace urfinjuezz\BCMathHelper;


class BCMathHelper
{
    public static function floor(string $value): string
    {
        $sub = '0';
        if (
            '-' === $value[0]
            && false !== strpos($value, '.', 2)
            && "." !== substr(rtrim($value, '0'), -1)
        ) {
            $sub = '1';
        }
        return bcsub($value, $sub, 0);
    }

    public static function ceil(string $value): string
    {
        $add = '0';
        if (
            '-' !== $value[0]
            && false !== strpos($value, '.', 1)
            && "." !== substr(rtrim($value, '0'), -1)
        ) {
            $add = '1';
        }
        return bcadd($value, $add, 0);
    }

    public static function round(string $value, int $precision = 0): string
    {
        $add = '-' === $value[0] ? '-' : '';
        $add .= '0.' . str_repeat('0', $precision) . 5;
        return bcadd($value, $add, $precision);
    }

    public static function abs(string $value, ?int $scale = null): string
    {
        $factor = '-' === $value[0] ? '-1' : '1';
        return bcmul($value, $factor, $scale);
    }

    public static function min(array $values, ?int $scale = null): string
    {
        $min = array_pop($values);
        foreach ($values as $value) {
            if (-1 === bccomp($value, $min, $scale)) {
                $min = $value;
            }
        }
        return bcadd($min, '0', $scale);
    }

    public static function max(array $values, ?int $scale = null): string
    {
        $max = array_pop($values);
        foreach ($values as $value) {
            if (1 === bccomp($value, $max, $scale)) {
                $max = $value;
            }
        }
        return bcadd($max, '0', $scale);
    }

    public static function arraySum(array $values, ?int $scale = null): string
    {
        $sum = bcadd('0', '0', $scale);
        foreach ($values as $value) {
            $sum = bcadd($sum, $value, $scale);
        }
        return $sum;
    }

}