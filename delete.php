<?php

require_once './db.php';
require_once './queries.php';

$id = $_GET['id'];

$statement = $pdo->prepare($delete_task);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
if ($statement->execute()) {
  header('location: index.php');
} else {
  echo "Deletion Unsuccessfull";
}
