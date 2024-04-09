<?php

// simple array
$numbers = [1,2,3,4];
$fruits = array('apple', 'orange', 'pear') ;

var_dump($numbers);
print_r($numbers);

echo $fruits[2];

// Associative array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];
echo $colors[4];

$hex = [
    'blue' => '#f00',
    'red' => '#0fb',
    'green' => '00f'
];
echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'dump',
    'email' => 'Brad@gmail.com'
];
    // echo $person ['first_name'];

$people = [
    [
    'first_name' => 'Brad',
    'last_name' => 'dump',
    'email' => 'brad@gmail.com'
],
    [
    'first_name' => 'jony',
    'last_name' => 'joy',
    'email' => 'jony@gmail.com'
],
    [
    'first_name' => 'tom',
    'last_name' => 'heinz',
    'email' => 'heinz@gmail.com'
]
];

    // echo $people[2]['email'];


var_dump(json_encode($people));
