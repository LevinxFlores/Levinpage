<?php session_start(); ?>
<html>
	<head>
		<title>Registrate</title>
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
		<h2 style=" width: 10vw; margin-left :8vw; font-family: 'Roboto', sans-serif; color: white;  font-size: 50px;">Registro</h2>
		
		<form role="form" name="registro" action="php/registro.php" method="post" style="center">
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" style="border-radius: 10px; ">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nombre Completo</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" style=" border-radius: 10px;" >
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" style="border-radius: 10px;">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" style=" border-radius: 10px;" >
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a" style="border-radius: 10px; ">
		  </div>

		  <button type="submit" class="btn btn-success"style=" width: 10vw; margin-left :8vw; background-color:#24ADAB; border-radius: 10px; border-color:#24ADAB; " >Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>