<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

$tot = 0;

foreach ($students as $name => $age){
    echo $name . ' ' . $age . '</br>';

    $tot += $age;
}
$avg = $tot / count($students);


echo $avg;