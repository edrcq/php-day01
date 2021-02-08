<?php 

require_once("init.php");

// check empty fields
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cpassword'])) {
    header('Location: signup.php');
    die();
}


// check email
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: signup.php');
    die();
}

// check confirm password
if ($_POST['password'] !== $_POST['cpassword']) {
    header('Location: signup.php');
    die();
}

// $AccountManager->getByEmail();
if (account_getByEmail($_POST['email']) !== false) {
    header('Location: signup.php');
    die();
}

$id = account_add([
    'email' => $_POST['email'],
    'password' => hash('sha256', $_POST['password']),
]);

header('Location: signup.php?success=true&user_id=' . $id);




?>