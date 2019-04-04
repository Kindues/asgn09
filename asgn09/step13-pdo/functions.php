<?php

function connectToDb()
{

try {

//$pdo = new PDO('mysql:host=127.0.0.1; dbname=test', 'root', '');
  return new PDO('mysql:host=127.0.0.1; dbname=cravenmo_myToDo', 'root', 'root');
} catch (PDOException $e) {
  die($e->getMessage());
  //die('Could not connect.');
}
}

function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from mytodo');

$statement->execute();

//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
//$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
  
}



function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}