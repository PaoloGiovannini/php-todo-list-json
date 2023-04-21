<?php

if (file_exists('database.json')) {
    $stringFromJson = file_get_contents('database.json');
    $toDoList = json_decode($stringFromJson, true);
} else {
    $toDoList = [];
}

if (isset($_POST['element']) && $_POST['element'] !== '') {

    $toDo = [
        'text' => $_POST['element'],
        'done' => false,
    ];
    array_push($toDoList, $toDo);
    $stringList = json_encode($toDoList);
    file_put_contents('database.json', $stringList);
}
header('Content-Type: application/json');
echo json_encode($toDoList);