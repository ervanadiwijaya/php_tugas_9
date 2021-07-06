<?php

$temp = 0;
$temp2 = 1;

for ($i = 0; $i < 20; $i++) {

    $output = $temp + $temp2;
    $temp = $temp2;
    $temp2 = $output;

    echo " $output ";
}
