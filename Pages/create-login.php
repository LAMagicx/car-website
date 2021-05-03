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

include_once "../DB/users.php";

if (isset($_POST['cancel'])) {
    header('Location: '.$_POST['page'].'.php');
    exit();
}


if (isset($_POST['create'])) {
    add_user("../DB/users.json", $_POST['email'], $_POST['username'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['type']);
    header('Location: '.$_POST['page'].'.php');
    exit();
}

?> 