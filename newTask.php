<?php
var_dump($_POST);

if (isset($_POST['new_task'])) {
    $task = $_POST['new_task'];

    $tasks_string = file_get_contents('tasks.json');

    $tasks_array = json_decode ($tasks_string, true);

    array_unshift($tasks_array, [
        'task' => $task,
        'done' => false
    ]);

    $new_tasks_json= json_encode($tasks_array);

    file_put_contents('tasks.json', $new_tasks_json);

    header('Content-Type: application/json');

    echo $new_tasks_json;
}