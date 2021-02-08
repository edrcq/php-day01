<?php 
session_start();
?>

<h1>Login</h1>

<form action="handle_login.php" method="POST">
    Email: <input name="email" /><br />
    Passw: <input name="password" type="password" /><br />
    <button type="submit">Login</button>
</form>