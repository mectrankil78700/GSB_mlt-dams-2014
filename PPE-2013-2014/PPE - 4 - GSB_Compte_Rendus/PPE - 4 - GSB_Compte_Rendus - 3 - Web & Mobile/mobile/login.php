<?php
/** 
 * Page d'accueil de l'application web AppliFrais
 * @package default
 * @todo  RAS
 */
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>CR</title>

		<!--=== CSS ===-->

		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- Theme -->
		<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

		<!-- Login -->
		<link href="assets/css/login.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
		<!--[if IE 7]>
			<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
		<![endif]-->

		<!--[if IE 8]>
			<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

		<!--=== JavaScript ===-->

		<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>

		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="assets/js/libs/html5shiv.js"></script>
		<![endif]-->

		<!-- Beautiful Checkboxes -->
		<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>

		<!-- Form Validation -->
		<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>

		<!-- Slim Progress Bars -->
		<script type="text/javascript" src="plugins/nprogress/nprogress.js"></script>

		<!-- App -->
		<script type="text/javascript" src="assets/js/login.js"></script>
		<script>
		$(document).ready(function(){
			"use strict";

			Login.init(); // Init login JavaScript
		});
		</script>
	</head>

	<body class="login">
		<!-- Logo -->
		<div class="logo">
			<img src="assets/img/logo.jpg" alt="logo" width="190"/>
		</div>
		<!-- /Logo -->

		<!-- Login Box -->
		<div class="box">
			<div class="content">
				<!-- Login Formular -->
				<form class="form-vertical login-form" action="index.html" method="post">
					<!-- Title -->
					<h3 class="form-title">Connexion</h3>

					<!-- Error Message -->
					<div class="alert fade in alert-danger" style="display: none;">
						<i class="icon-remove close" data-dismiss="alert"></i>
						Entrez votre login et votre mot de passe.
					</div>

					<!-- Input Fields -->
					<div class="form-group">
						<!--<label for="username">Username:</label>-->
						<div class="input-icon">
							<i class="icon-user"></i>
							<input type="text" name="username" class="form-control" data-rule-required="true" data-msg-required="Entrez votre identifiant." id="txtLogin" name="txtLogin" maxlength="20" size="15" value="" title="Entrez votre identifiant." placeholder="Votre identifiant." autofocus="autofocus"/>
						</div>
					</div>
					<div class="form-group">
						<!--<label for="password">Password:</label>-->
						<div class="input-icon">
							<i class="icon-lock"></i>
							<input type="password" class="form-control" data-rule-required="true" data-msg-required="Entrez votre mot de passe." id="txtMdp" name="txtMdp" maxlength="11" size="15" value=""  title="Entrez votre mot de passe." placeholder="Votre mot de passe, ex:jj/mm/aaaa."/>
						</div>
					</div>
					<!-- /Input Fields -->

					<!-- Form Actions -->
					<div class="form-actions">
						<label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Se souvenir de moi</label>
					</div>
					<div class="form-actions">
						<button type="submit" class="submit btn btn-primary pull-right">
							<i class="icon-ok"></i> Connexion
						</button>
						<button type="reset" class="submit btn btn-primary pull-right">
							<i class="icon-reply"></i> Effacer
						</button>
					</div>
				</form>
				<!-- /Login Formular -->

			</div> <!-- /.content -->
		</div>
		<!-- /Login Box -->
	</body>
</html>