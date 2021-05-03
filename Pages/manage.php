<?php
session_start();
if (isset($_SESSION['ID'])) {
  if (!($_SESSION['ID'] == 0 || $_SESSION['ID'] == 1)) {
    header('Location: wrong-page.html');
  }
} else {
  header('Location: ../SignIn/login.php');
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
    <link href="../CSS/style.css" rel="stylesheet">

    <title>Magic</title>
  </head>
  <body>
    <form method="POST" action="../SignIn/login.php" id="form">
      <input type="hidden" name="OUT" value="manager">
    </form>
    <script>
      function logout() {
        document.getElementById("form").submit();
      }
    </script>
    <div class="container-sm">
      <div class="row">
        <div class="col-6"><h3>Manager</h3></div>
        <div class="col-6"><h3 id="header-button" class="text-end" onclick="logout()">Log Out</h3></div>
      </div>
    </div>
  </body>
</html>