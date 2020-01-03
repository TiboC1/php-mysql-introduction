<?php

require 'connection.php';
$sql = "SELECT id, firstName, lastName, username, gender FROM student";
$pdo = openConnection();
$query = $pdo->prepare( $sql );
$query->execute();
$results = $query->fetchAll( PDO::FETCH_ASSOC );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>Profile List</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <a class="navbar-brand" href="#">SQL excercise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Profiles <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="insert.php">registration</a>
    </div>
  </div>
</nav>
<div class="container">
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody> <?php
        // output data of each row
    foreach ($results as $row){ ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']) ?></td>
            <td><?php echo htmlspecialchars($row['firstName']) ?></td>
            <td><?php echo htmlspecialchars($row['lastName']) ?></td>
            <td><?php echo htmlspecialchars($row['username']) ?></td>
        </tr>   
<?php    }
?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>