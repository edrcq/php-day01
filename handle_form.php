<?php 

// var_dump($_POST);

// echo '<br />';

// print_r($_POST);

if (isset($_POST['name'])) {
    echo 'Nom [isset]: ' . $_POST['name'] . '<br />';
}
if (!empty($_POST['name'])) {
    echo 'Nom [!empty]: ' . $_POST['name'] . '<br />';
}

if (isset($_POST['message'])) {
    echo 'Message [isset]: ' . $_POST['message'] . '<br />';
}
if (!empty($_POST['message'])) {
    echo 'Message [!empty]: ' . $_POST['message'] . '<br />';
}

// Ne fonctionne pas si headers_sent() = true
header('Location: index.php');

?>