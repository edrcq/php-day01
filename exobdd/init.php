<?php 
session_start();

require_once('db.php');
require_once('Account.php');
require_once('AccountManager.php');
require_once('AccountManager_func.php');

$AccountManager = new AccountManager($db);

?>