<?php
$number = 2;

function doubleIt($number) {
  return $number *= 2;
}
$doubled = doubleIt($number);

echo '$doulbed is ' . $doubled . '<br>';
echo '$number is ' . $number . '<br>';
