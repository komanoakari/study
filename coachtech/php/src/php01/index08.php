<?php
$people = [
    [
        'taro', 25 ,"men"
    ],
    [
        'jito', 25 ,"men"
    ],
    [
        'hanako', 25 ,"men"
    ]
];

foreach ($people as $value) {
    echo $value[0] ."(" .$value[1] . "です" . '<br />';
}
