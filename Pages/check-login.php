<?php
session_start();
$DB = "../DB/users.json";
include_once "../DB/users.php";

$USERS = get_users($DB);

$email_found = false;
foreach ($USERS as $key => $user) {
    if ($key == $_POST['email']) {
        $email_found = true;
        if (password_verify($_POST['password'], $user['password'])) { /* magicaly check password */
            switch ($user['type']) {
                case "admin":
                    write_to_log("../logs.txt", $user["username"], "Admin logged in.");
                    $_SESSION["ID"]=0;
                    header('Location: admin.php');
                    break;
                case "manager":
                    write_to_log("../logs.txt", $user["username"], "Manager logged in.");
                    $_SESSION["ID"]=1;
                    header('Location: manage.php');
                    break;
                case "user":
                    write_to_log("../logs.txt", $user["username"], "User logged in.");
                    $_SESSION["ID"]=2;
                    header('Location: main.html');
                    break;
            }
            exit();
        } else {
            redirect("login.php", array_merge(array("incorrect-password" => 1), $_POST));
            break;
        }
    }
}

if (!$email_found) {
    redirect("login.php", array_merge(array("incorrect_email" => 1), $_POST));
}

?>