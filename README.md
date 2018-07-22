# BCMathHelper

Helper for bcmath functions

Implements round, floor, ceil, abs, min, max and arraySum functions.

### Usage

floor — Round fractions down

`$out = BCMathHelper::floor($value);`

Returns the next lowest integer value (as float) by rounding down value if necessary.

ceil — Round fractions up

`$out = BCMathHelper::ceil($value);`

Returns the next highest integer value by rounding up value if necessary.

round — Rounds arbitrary precision number

`$out = BCMathHelper::round($value,$precision);`

Returns the rounded value of val to specified precision (number of digits after the decimal point). precision can also be zero (default).

abs — Absolute value

`$out = BCMathHelper::abs($value,$scale);`

Returns the absolute value of value.

scale - This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the bcscale() function, or fallback to 0 if this has not been set.

min — Find lowest value

`$out = BCMathHelper::min($values, $scale);`

Returns the lowest value in array. 

scale - This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the bcscale() function, or fallback to 0 if this has not been set.

max — Find highest value

`$out = BCMathHelper::max($values, $scale);`

Returns the highest value in that array.

scale - This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the bcscale() function, or fallback to 0 if this has not been set.

arraySum — Calculate the sum of values in an array

`$out = BCMathHelper::min(arraySum, $scale);`

arraySum() returns the sum of values in an array.

scale - This optional parameter is used to set the number of digits after the decimal place in the result. If omitted, it will default to the scale set globally with the bcscale() function, or fallback to 0 if this has not been set.