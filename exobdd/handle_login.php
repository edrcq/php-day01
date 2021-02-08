<?php 

require_once("init.php");

// check empty fields
if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: login.php');
    die();
}

// check email
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: login.php');
    die();
}

$account = account_getByEmail($_POST['email']);
if ($account === false) {
    header('Location: login.php');
    die();
}

$password = hash('sha256', $_POST['password']);
if ($account['password'] != $password) {
    header('Location: login.php');
    die();
}

$_SESSION['user'] = $account;

header('Location: loggedin.php');




?>