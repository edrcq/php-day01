<?php 
	require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ceci est un titre</title>
</head>
<body>
	<h1><?php echo ucfirst($page); ?></h1>
	<p>
		Bonjour, <?php echo $hello; ?>
	</p>
	<div>
	<?php 
		if (isset($_GET['page'])) { ?>
		<h2>Page <?php echo $_GET['page']; ?></h2>
		<?php 
		}
		?>
	</div>
	
</body>
</html>