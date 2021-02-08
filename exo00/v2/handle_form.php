<?php 

// $_POST 
if (empty($_POST['message']) || empty($_POST['email']) || empty($_POST['name'])) {
    header('Location: index.php?p=form&error=empty');
    die();
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: index.php?p=form&error=bademail');
    die();
}

header('Location: index.php?p=form&sucess=1');
die();

?>