<?php
session_start();
if (isset($_SESSION['ID'])) {
  if ($_SESSION['ID'] != 0) {
    header('Location: wrong-page.html');
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
    <link href="../CSS/button-animations.css" rel="stylesheet">
    

    <title>Magic</title>
  </head>
  <body>
    <form method="POST" action="login.php" id="form-logout">
      <input type="hidden" name="OUT" value="admin">
    </form>
    <script>
      function logout() {
        document.getElementById("form-logout").submit();
      }
    </script>
    <h1>Magify</h1>
    <div class="container-sm">
      <div class="row">
        <div class="col-6"><h3>Admin</h3></div>
        <div class="col-6 slide-left"><h3 id="header-button" class="text-end" onclick="logout()">Log Out</h3></div>
      </div><div class="row">
        <div class="col-6 slide-right"><h3 id="header-button" onclick="location.href='create-manager.php'">Add Manager</h3></div>
        <div class="col-6 slide-left"><h3 id="header-button" class="text-end" onclick="location.href='view-messages.php'">View Messages</h3></div>
      </div>
    </div>
    <div class="wrapper">
      <div class="form-group">
        <label for="textArea">LOGS</label>
        <textarea class="form-control rounded-0" id="textArea" rows="5" style="font-size: 0.7em;font-family: monospace">DATE    | TIME      | USER | MESSAGE
        <?php
        $logs = file("../logs.txt", FILE_IGNORE_NEW_LINES);
        foreach(array_reverse($logs) as $log) {echo $log . "\n";}
        ?>
        </textarea>
      </div>
    </div>
  </body>
</html>