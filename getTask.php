<?php
$file_path = './tasks.json';
$tasks_json_string = file_get_contents($file_path);

include './helpers.php';

setHeaders() ;

echo $tasks_json_string;