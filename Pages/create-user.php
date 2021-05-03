<?php
session_start();
if (isset($_SESSION['ID'])) {
  if ($_SESSION['ID'] != 1) {
    header('Location: wrong-page.php');
    exit();
  }
} else {
  header('Location: login.php');
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="../CSS/login-style.css" rel="stylesheet">

    <title>Magic</title>
    </head>
    <body>
    <h1>Create User</h1>

    <form method="POST" action="create-login.php">
        <input type="hidden" name="type" value="user">
        <input type="hidden" name="page" value="manage">
        <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="user">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary" name="create">Create</button>
        <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
    </form>
    </body>
</html>

