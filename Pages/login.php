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
    <h1>Login</h1>

    <form method="POST" action="check-login.php" class="form-floating">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <?php
                session_start();
                if (isset($_POST["OUT"])) {
                    session_destroy();
                }
                if (isset($_POST["incorrect_email"])) {
                    echo "<div id='passwordHelpBlock' class='form-text is-invalid'>
                    Your email is incorrect!
                    </div>";
                }
                if (isset($_POST["incorrect-password"])) {
                    echo "<div id='passwordHelpBlock' class='form-text is-invalid'>
                    Your password is incorrect!
                    </div>";
                }

            ?>
        </div>
        <button type="submit" class="btn btn-primary" name="signin">Sign In</button>
    </form>
    </body>
</html>

