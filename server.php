<?php

$toDoList = [
    [
        'text' => 'Giocare a pallone',
        'done' => true
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
if (isset($_POST['element'])) {

    $toDo = [
        'text' => $_POST['element'],
        'done' => false,
    ];
    array_push($toDoList, $toDo);
}
header('Content-Type: application/json');
echo json_encode($toDoList);