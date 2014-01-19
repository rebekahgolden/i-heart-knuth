<?php
// Chapter 1 Exercise 1
//rearrange (a,b,c,d) to (b,c,d,a) in the minimum number of replacements

$one = 'apple';
$two = 'banana';
$three = 'coconut';
$four = 'date';

function shiftBit ($a,$b,$c,$d) {
	echo "Given $a, $b, $c, $d ";
	$carry = $a;
	$a = $b;
	$b = $c;
	$c = $d;
	$d = $carry;
	echo " the order can be shifted to $a, $b, $c, $d \n";
}

shiftBit ($one, $two, $three, $four);

?>
