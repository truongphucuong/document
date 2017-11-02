<?php

$arr = [
    'a' => [
        'b' => 'd'
    ]
];
$str = json_encode($arr, JSON_PRETTY_PRINT);

file_put_contents('data.json', $str);

/* FILE_APPEND: Để giữ lại nội dung trước đó mà không bị ghi đè lên */
file_put_contents('data.json', $str , FILE_APPEND );
