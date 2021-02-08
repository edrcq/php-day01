<?php 

$hellow = '<h2>Hello world</h2>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $hellow;

    echo htmlentities($hellow);
    echo '<br />';
    echo htmlspecialchars($hellow);
    echo '<br />';
    echo htmlentities($hellow, ENT_QUOTES);
    echo '<br />';
    ?>
</body>
</html>