<?php
$number = 2;

/*function doubleIt($number) {
  return $number *= 2;
}*/
// pass $number by reference

function doubleIt(&$num) {
  $num *= 2;
}
$doubled = doubleIt($number);

echo '$doulbed is ' . $doubled . '<br>';
echo '$number is ' . $number . '<br>';
var_dump($doubled);
