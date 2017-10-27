<?php

$arr = [
    'a' => [
        'b' => 'd'
    ]
];
$str = json_encode($arr, JSON_PRETTY_PRINT);

file_put_contents('data.json', $str);