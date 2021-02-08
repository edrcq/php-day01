<?php 

require_once('src/data_manager.php');
$counter = get_count();
$counter++;
save_count($counter);

$page = 'home';
$pages = array('home', 'form');

if (isset($_GET['p'])) {
    if (in_array($_GET['p'], $pages)) {
        $page = $_GET['p'];
    }
}

require_once realpath("partials/header.php");
require_once realpath("views/" . $page . ".php"); // views/../../htmlchars
require_once realpath("partials/footer.php");

?>