<?php session_start(); ?>
<html>
	<head>
		<title>Iniciar sesion</title>
		<link href="img/icono.png" rel="icon">
		<link href="img/icono.png" rel="inicioicon">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
	</head>
	<style>
	body{
		min-height: 100vh;
		background-repeat:no-repeat ;
		background-size:cover;
		background-position: center;
		background-attachment: fixed;
		background-image: url("https://images.pexels.com/photos/402028/pexels-photo-402028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
	}
	
	</style>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container" style=" width: 55vw; margin-left : 37vw;">
<div class="row">
<div class="col-md-6">
		<h2 style=" width: 10vw; margin-left :10vw; font-family: 'Roboto', sans-serif; color: white;  font-size: 50px;">Login</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" style="border-radius: 10px;">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" style="border-radius: 10px;">
		  </div>

		  <button type="submit" class="btn btn-primary" style=" width: 10vw; margin-left :8vw; border-radius: 10px; background-color:#24ADAB; border-color:#24ADAB;">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>