<?php
//1)

$n = 100;
$array[]= [];

for ($i = 0; $i < $n; $i++) {        //O(n)
    for ($j = 1; $j < $n; $j *= 2) { //O(log(n))
        $array[$i][$j]= true;
    } }
//O(n log(n))

//2)

$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) { //O(n/2)
    for ($j = $i; $j < $n; $j++) { //O(n)
        $array[$i][$j]= true;
    } }
//O(n^2)