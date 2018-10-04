<?php

// function connectToDb($database_name)
// {
//   try {
//     return new PDO("mysql:host=127.0.0.1;dbname={$database_name}", 'root', '');
//   } catch (PDOException $e) {
//     die("Coould not connect");
//   }
// }

// function fetchAllTodos($pdo)
// {
//   $statement = $pdo->prepare("select * from todos;");
//   $statement->execute();
//   return $statement->fetchAll(PDO::FETCH_CLASS, 'Todo');
// }
