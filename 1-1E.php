<?php
echo 'Euclid\'s Algorithm 1.1E';

$number1 = 125;
$number2 = 15;

function littleEuclid($m, $n) {
    echo “Given two numbers m = $m and n = $n, find the greatest common divisor. “;
    echo ‘Find the remainder using the php modulus function (%). ‘;

    $remainder = $m % $n;

    echo “The remainder is $remainder “;
    echo ‘Is the remainder zero? ‘;

    if ($remainder == 0) {
        echo “Yes! The remainder is zero! n is the answer! The answer is $n “;
    } else {
        echo ‘Nope. Reduce. (Here Knuth says in mathematical notation set m to what n is and n to what the remainder is.) ‘;
        littleEuclid($n,$remainder);
    }
}
littleEuclid($number1,$number2);
?>
