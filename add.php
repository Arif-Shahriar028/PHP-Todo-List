<?php
require_once './queries.php';
require_once './db.php';


if (isset($_POST)) {
  $name = $_POST['task'];
  $statement = $pdo->prepare($insert_task);

  $val = $statement->execute([
    ':name' => $name
  ]);
  if ($val) {
    header('location: index.php');
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
  } else {
    echo "Not inserted";
  }
}
