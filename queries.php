<?php
$fetch_all = 'SELECT * FROM tasks;';
$insert_task = 'INSERT INTO tasks(name) VALUES(:name);';
$delete_task = 'DELETE FROM tasks WHERE id = :id;';
$update_task = "UPDATE tasks
  SET name = :name
  WHERE id = :id;
";
