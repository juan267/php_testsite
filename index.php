<?php 

require 'functions/utils.php';
// require 'models/todo.php';
require 'functions/db.php';

// Connection to the database
// $pdo = connectToDb('todos');
// $todos = fetchAllTodos($pdo);

// dd($todos);

// Arrays
$fruits = ['salustiana', 'sweety', 'valencia']; 

// Pushing to arrays
$fruits[] = 'limones';

// Hashes
$dogs = [
  'ozu' => 8,
  'moshi' => 11,
  'rex' => 1
];

// Adding key to hashes 
$dogs['hashi'] = 5;

$todo = [
  'title' => 'Terminar el issue',
  'due' => 'Para hoy',
  'assign_to' => 'juan267',
  'completed' => true
];

$ozuOldEnogh = oldEnough(14);

// Esta es una funcion de utils para debuggear variables
// dd($ozuOldEnogh);

require 'index.view.php';
