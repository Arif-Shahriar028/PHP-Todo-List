<!DOCTYPE html>

<?php

require_once './db.php';
require_once './queries.php';

$statement = $pdo->query($fetch_all);
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- <?php echo "noting to show"; ?> -->

  <div class="container">
    <div class="text-center" style="margin-top: 30px;">
      <h2>Todo-List</h2>
    </div>
    <div class="row" style="margin-top: 80px;">
      <div class="col-md-10 col-md-offset-1">
        <table class="table">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTaskModal">Add task</button>
          <div class="modal" tabindex="-1" id="addTaskModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Task</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="add.php">
                    <div class="mb-3">
                      <label for="addTaskText" class="form-label">Your task</label>
                      <input type="text" name="task" required class="form-control" id="addTaskText" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Text should not be too long.</div>
                    </div>
                    <input type="submit" name="send" class="btn btn-primary">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-default float-end">print</button>
          <hr><br>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rows as $row) { ?>
              <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td class="col-md-10"><?php echo $row['name'];
                                      ?></td>
                <td><a href="" class="btn btn-primary">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">delete</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>