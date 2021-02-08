<?php 

require_once("init.php");

if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
else {
    header('Location: login.php');
  //  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte utilisateur</title>
</head>
<body>
    <a href="logout.php">Logout</a><br />
    Ceci est un contenu privé.<br />
    <?php var_dump($user); ?>
</body>
</html>