<?php
	//Allow the config
	define('__CONFIG__', true);
	//Require the config
	require_once('inc/config.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>TEKSYSTEM | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />
</head>
<body>
	<div class="uk-section uk-container uk-preserve-color uk-align-center">
		<div class="uk-text-center uk-align-center">
			<h2>Welcome to MatrixPortal</h2>
		</div>
		<div class="uk-grid uk-child-width-1-3@m uk-child-width-1-1 " uk-grid>
			<form class="uk-form-stacked js-register uk-align-center uk-child-width-* " >
		       <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com">
			        </div>
			    </div>
		       <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your password">
			        </div>
			    </div>
		      <div class="uk-margin">
			       <button class="uk-button uk-button-primary">Register</button>
			    </div>
			</form>
		</div>
	</div>

	<?php require_once('inc/footer.php');?>

	