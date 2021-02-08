<?php 

// $_POST 
if (empty($_POST['message']) || empty($_POST['email']) || empty($_POST['name'])) {
    header('Location: form.php?error=empty');
    die();
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: form.php?error=bademail');
    die();
}

header('Location: form.php?sucess=1');
die();

?>