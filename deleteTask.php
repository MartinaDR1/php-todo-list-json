<?php
if(isset($_POST["index"])) {

    $index = intval($_POST["index"]);

    $tasks_string = file_get_contents('tasks.json');

    $tasks_array = json_decode($tasks_string, true);

    array_splice($tasks_array, $index, 1);

    $new_tasks_json = json_encode($tasks_array);

    file_put_contents('tasks.json', $new_tasks_json);

    include './helpers.php';

    setHeaders() ;

    echo $new_tasks_json;
}