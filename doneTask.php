<?php
$index = $_POST['index'];

$tasks_string = file_get_contents('tasks.json');

$tasks_array = json_decode($tasks_string, true);

$tasks_array[$index]['done'] = !$tasks_array[$index]['done'];

$new_tasks_json = json_encode($tasks_array);

file_put_contents('tasks.json', $new_tasks_json);

header('Content-Type: application/json');

echo $new_tasks_json;
