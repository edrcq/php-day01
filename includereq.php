<?php 

function test_it_inc() {
    echo $page;
}

function test_it_req() {
    require("config.php");
    echo $page;
}

test_it_inc();
test_it_req();
echo $page;