<?php
	//Allow the config
	define('__CONFIG__', true);
	//Require the config
	require_once('inc/config.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>TEKSYSTEM | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />
</head>
<body>
	<div class="uk-section uk-container uk-align-left">

		<div class="uk-text-center uk-align-center">
			<h2>Welcome to TEKSYTEM Index</h2>
		</div>
		<?php 
			echo "Hello World. Today is " .  date(" Y m d");
		?>
		<p>
			<a href="login.php">login</a>
			<a href="register.php">register</a>
		</p>
	
	</div>

	<?php require_once('inc/footer.php');?>

	