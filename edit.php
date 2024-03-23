<?php

require_once './db.php';
require_once './queries.php';

// prepare statement
$statement = $pdo->prepare($update_task);

// bind params
$statement->bindParam(':id', $_POST['edit-id'], PDO::PARAM_INT);
$statement->bindParam(':name', $_POST['edit-task']);

// execute the update statement
if ($statement->execute()) {
  header('location: index.php');
  // echo "The task has been updated!";
}
