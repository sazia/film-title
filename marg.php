<?php
//using marged
$array1 = array(1,2,3,4,5,6,7,8,9,10,11,12);
$array2 = array(1,2,3,13);

$merged = array_merge($array1,$array2);
print_r($merged);