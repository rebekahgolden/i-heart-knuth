<?php
echo 'Euclid\'s Algorithm 1.1E  ';

$number1 = 24;
$number2 = 234;

function littleEuclid($m, $n) {
    if ($m <= 0 || $n <= 0) {
        echo 'Oh! No! A zero or a negative number! No negativity here. Nor nothing!  ';
        return 0;
    } else {
        // make sure that $m is the larger number
        if ($n > $m) {
            $carry = $n;
            $n = $m;
            $m = $carry;
        }
        echo "Given two numbers where the larger is $m and the smaller is $n, find the greatest common divisor.  ";
        echo 'Find the remainder using the php modulus function (%).  ';

        $remainder = $m % $n;

        echo "The remainder is $remainder  ";
        echo 'Is the remainder zero?  ';

        if ($remainder == 0) {
            echo "Yes! The remainder is zero! n is the answer! The answer is $n  ";
            return $n;
        } else {
            echo 'Nope. Reduce. (Here Knuth says in mathematical notation set m to what n is and n to what the remainder is.)  ';
            littleEuclid($n,$remainder);
        }
    }
}
echo littleEuclid($number1,$number2);
?>
