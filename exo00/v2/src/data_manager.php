<?php 

function get_count() {
    $count = file_get_contents('./counter.txt');
    return intval($count);
}

function save_count($count) {
    file_put_contents('counter.txt', $count);
}

?>