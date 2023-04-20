<?php

$toDoList = [
    [
        'text' => 'Giocare a pallone',
        'done' => false
    ],
    [
        'text' => 'Comprare la ps5',
        'done' => false
    ],
    [
        'text' => 'Fare la spesa',
        'done' => false
    ],
];
header('Content-Type: application/json');
echo json_encode($toDoList);