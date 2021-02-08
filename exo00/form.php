<?php 
    require_once "header.php";

    function getErrorMessage($error_code) {
        switch ($error_code) {
            case "empty":
                return "Veuillez remplir tous les champs";
            case "bademail":
                return "Adresse email invalide";
            default:
                return "Unknown error";
        }
    }
?>

<h1>Form</h1>

<?php 
    if (!empty($_GET['error'])) {
        echo '<div class="alert alert-error">'. getErrorMessage($_GET['error']) . '<a href="form.php">Réessayer</a></div>';
    }
    else if (!empty($_GET['success'])) {
        $success = true;
        echo '<div class="alert alert-success">Envoyé avec succès</div>';
    }
    else {
?>
<form action="handle_form.php" method="post">
    Name:
    <input name="name" type="text" />
    Email:
    <input  name="email" type="text" />
    Message:
    <input  name="message" type="text" />
    <button type="submit">Envoyer</button>
</form>
    <?php
    } // ferme le else
    ?>

<?php 
    require_once "footer.php";
?>
