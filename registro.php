<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body style="background-image: url('img/banner2.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<div class="navbar navbar-expand-sm bg-light navbar-dark nav-pills" style="background-image: url('img/banner2.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	 <a class="navbar-brand"><img  src="img/Logo2.png"></a>	
	 
</div>
	



<div class="container  justify-content-between float-center"  style="height: 500px; text-align: center;padding-top: 30px;">
	<div class="row justify-content-between" >
		<div class="col">
			<table >
				<tr>
					<div class="card w-25 " style="float: left; margin: 10px; text-align: center;">
						<div class="card-body" >
							
							
								Registrarse
								<form action="registrarse.php" method="post">
								<div class="input-group mb-3 float-left">

									<!--Input-->
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Usuario" name="usuario">
									  </div>

									  <div class="input-group mb-3 float-left">
									  <!--Input-->
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
									  </div>

									  <div class="input-group mb-3 float-left">
									  <!--Input-->
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Nombre" name="nombre">
									  </div>

									  <div class="input-group mb-3 float-left">
									  <!--Input-->
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Mail" name="mail">
									  </div>
									  <div class="card-footer">
							<button type="submit" class="btn btn-outline-primary">Registrarse</button>
						</div>
							</form>
						</div>
						
					</div>
				</tr>
</table>

<table >
				<tr>
					<div class="card w-25 " style="float: left; margin: 10px; text-align: center;">
						<div class="card-body" >
							Iniciar sesi&oacute;n
							
							
								<form action="sesion.php" method="post">
								<div class="input-group mb-3 float-left">

									<!--Input-->
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Usuario" name="usuario">
									  </div>

									  <div class="input-group mb-3 float-left">
									  <!--Input-->
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1">@</span>
									  </div>
									  <input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
									  </div>
									  <div class="card-footer">
							<button type="submit" class="btn btn-outline-primary">Iniciar sesi&oacute;n</button>
						</div>
									</form>
							
						</div>
						
					</div>
				</tr>
</table>
</div>
</div>
</div>
</div>
</div>









<script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	alarma();
	function alarma(){
		alert('Inicie sesion o registrese para continuar');
	}
</script>
</body>

</html>