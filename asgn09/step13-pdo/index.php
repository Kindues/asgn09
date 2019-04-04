<?php

require 'functions.php';
require 'Task.php';


$pdo = connectToDb();

//$task->all();

$tasks = fetchAllTasks($pdo);

//var_dump($results[0]->description);
//var_dump($results[0]->jobTitle);

//var_dump($task[0]->foobar());

require 'index.view.php';
?>