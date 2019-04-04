<?php

//require 'functions.php';

//Todo Application
class Task {
  
  public $description;
  public $completed = false;
  
  public function __construct($description)
{
  //Auto triggered on instatiation
  $this->description = $description;
}
  
  public function complete()
  {
    $this->completed = true;
  }
  
  
  public function isComplete()
  {
    return $this->completed;
  }
  
  //public function description() This can be used to call the function if you set it to public over protected
  //{
  //  return $this->description;
  //}
  
}

$tasks = [
  new Task('Go to the store'),
  new Task('Finish my screencast'), 
  new Task('Clean my room') 
];

$tasks[0]->complete();




//$task = new Task('Go to the store'); //a new task object

//$task->complete();//complete the task

//var_dump($task ->isComplete());

//dd($task);

require 'index.view.php';