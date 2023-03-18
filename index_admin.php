<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<style type="text/css">
		.miestilo {
    background-color: none;
	}
	@media (max-width: 576px) {
	    .miestilo {
	        background-color: black;
	        align-self: center;
	    }
}
	</style>
</head>
<body style="background-image: url('img/fondo.png');"> 

<div class="container-fluid bg-primary float-center" style="background-image: url('img/bannerr.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover; height: 1000px">


<div class="navbar navbar-expand-sm bg-light navbar-dark nav-pills" style="background-image: url('img/bannerr.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	 <a class="navbar-brand"><img  src="img/Logo2.png"></a>	
	 

	<button class="navbar-toggler navbar-brand miestilo" type="button" data-toggle="collapse" data-target="#menux">
		<span class="navbar-toggler-icon"></span>
	</button>
	

	<div class="collapse navbar-collapse miestilo" id="menux">
		<ul class="navbar-nav">
			<li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Ofertas</a></li>
			<li class="nav-item dropdown">
				
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="submenux">Administrar</a>
				<div class="dropdown-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="submenux">Usuarios</a>
						<div class="dropdown-menu">
						<form action="buscar_usuarios.php" method="post" enctype="multipart/form-data">
						<button type="submit" class="dropdown-item" name="buscar">Ver usuarios</button>
						</form>
						<a href="agregar_usuario.php" class="dropdown-item">Agregar usuario</a>
						<a href="borrar_usuario.php" class="dropdown-item">Borrar usuario</a>
						<a href="actualizar_usuario.php" class="dropdown-item">Actualizar usuario</a>
						</div>


				</div>
			</li>
		
		</ul>
	</div>
	
	
	
<form class="form-inline my-2 float-right">
		<input type="text" placeholder="Ingrese su b&uacute;squeda" class="form-control float-right " style="width: 172px">
		<div class="btn-group btn-group-xs float-right">
		<button class="btn btn-outline-info miestilo" type="search">Buscar</button>
		</div>
		</form>
		

</div>
</div>


<!--inicio de las cartas-->
<div class="container  justify-content-between float-center"  style="height: 1000px; text-align: center;padding-top: 30px;">
	<div class="row justify-content-between" >
		<div class="col">
			<table >
				<tr>
					<div class="card w-25 " style="float: left; margin: 10px; text-align: center;">
						<div class="card-body" >
							<img src="img/asas1.jpg" alt="" class="img-fluid"  data-toggle="modal" data-target="#mimodal">
							<!--MODAL-->
							<div class="container-fluid">
							<div class="modal fade" id="mimodal">
								<div class="modal-dialog">
									<div class="modal-content">
											<button class="close" type="button" data-dismiss="modal">&times;</button>
											<div class="modal-body">
												<img class="img-fluid" src="img/pajarito.jpg">
											</div>
											<button class="btn btn-danger" data-dismiss="modal">cerrar</button></div>
										

									</div>
								</div>
							</div>
							
							<!--MODAL-->
							</img>
						</div>
						<div class="card-footer">
							<button href="#uno" data-toggle="collapse" class="btn btn-outline-primary">Consultar stock</button>
							<div class="collapse" id="uno">
							<br>
							Quedan <p class="badge badge-success">5</p> disponibles</div>
						</div>
					</div>
				</tr>



				<tr>
					<div class="card w-25" style="float: left;margin: 10px;text-align: center;">
						<div class="card-body">
							<img src="img/asas2.jpg" alt="elpe rruski" class="img-fluid" data-toggle="modal" data-target="#mimodal2">
							<!--MODAL-->
							<div class="container-fluid">
							<div class="modal fade" id="mimodal2">
								<div class="modal-dialog">
									<div class="modal-content">
											<button class="close" type="button" data-dismiss="modal">&times;</button>
											<div class="modal-body">
												<img class="img-fluid" src="img/rana.jpg">
											</div>
											<button class="btn btn-danger" data-dismiss="modal">cerrar</button></div>
										

									</div>
								</div>
							</div>
							<!--MODAL-->

						</div>
						<div class="card-footer">
							<button href="#uno1" data-toggle="collapse" class="btn btn-outline-primary">Consultar stock</button>
							<div class="collapse" id="uno1">
							<br>
							Quedan <p class="badge badge-success">3</p> disponibles</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="card w-25" style="float: left;margin: 10px;text-align: center;">
						<div class="card-body">
							<img src="img/asas3.jpg" alt="elpe rruski" class="img-fluid" data-toggle="modal" data-target="#mimodal3">
							<!--MODAL-->
							<div class="container-fluid">
							<div class="modal fade" id="mimodal3">
								<div class="modal-dialog">
									<div class="modal-content">
											<button class="close" type="button" data-dismiss="modal">&times;</button>
											<div class="modal-body">
												<img class="img-fluid" src="img/pajarito2.jpg">
											</div>
											<button class="btn btn-danger" data-dismiss="modal">cerrar</button></div>
										

									</div>
								</div>
							</div>
							
							<!--MODAL-->
						</div>
						<div class="card-footer">
							<button href="#uno2" data-toggle="collapse" class="btn btn-outline-primary">Consultar stock</button>
							<div class="collapse" id="uno2">
							<br>
							Quedan <p class="badge badge-warning">1</p> disponible</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="card w-25" style="float: left;margin: 10px;text-align: center;">
						<div class="card-body">
							<img src="img/asas4.jpg" alt="elpe rruski" class="img-fluid" data-toggle="modal" data-target="#mimodal4">
							<!--MODAL-->
							<div class="container-fluid">
							<div class="modal fade" id="mimodal4">
								<div class="modal-dialog">
									<div class="modal-content">
											<button class="close" type="button" data-dismiss="modal">&times;</button>
											<div class="modal-body">
												<img class="img-fluid" src="img/dragadicto.jpg">
											</div>
											<button class="btn btn-danger" data-dismiss="modal">cerrar</button></div>
										

									</div>
								</div>
							</div>
							
							<!--MODAL-->
						</div>
						<div class="card-footer">
							<button href="#uno3" data-toggle="collapse" class="btn btn-outline-primary">Consultar stock</button>
							<div class="collapse" id="uno3">
							<br>
							Quedan <p class="badge badge-danger">0</p> disponibles</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="card w-25" style="float: left;margin: 10px;text-align: center;">
						<div class="card-body">
							<img src="img/asas5.jpg" alt="elpe rruski" class="img-fluid" data-toggle="modal" data-target="#mimodal5">
							<!--MODAL-->
							<div class="container-fluid">
							<div class="modal fade" id="mimodal5">
								<div class="modal-dialog">
									<div class="modal-content">
											<button class="close" type="button" data-dismiss="modal">&times;</button>
											<div class="modal-body">
												<img class="img-fluid" src="img/coneja.jpg">
											</div>
											<button class="btn btn-danger" data-dismiss="modal">cerrar</button></div>
										

									</div>
								</div>
							</div>
							
							<!--MODAL-->
						</div>
						<div class="card-footer">
							<button href="#uno4" data-toggle="collapse" class="btn btn-outline-primary">Consultar stock</button>
							<div class="collapse" id="uno4">
							<br>
							Quedan <p class="badge badge-success">4</p> disponibles</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="card w-25" style="float: left;margin: 10px;text-align: center;">
						<div class="card-body">
							<img src="img/asas6.jpg" alt="elpe rruski" class="img-fluid" data-toggle="modal" data-target="#mimodal6">
							<!--MODAL-->
							<div class="container-fluid">
							<div class="modal fade" id="mimodal6">
								<div class="modal-dialog">
									<div class="modal-content">
											<button class="close" type="button" data-dismiss="modal">&times;</button>
											<div class="modal-body">
												<img class="img-fluid" src="img/patudo.jpg">
											</div>
											<button class="btn btn-danger" data-dismiss="modal">cerrar</button></div>
										

									</div>
								</div>
							</div>
							
							<!--MODAL-->
						</div>
						<div class="card-footer">
							<button href="#uno5" data-toggle="collapse" class="btn btn-outline-primary">Consultar stock</button>
							<div class="collapse" id="uno5">
							<br>
							Quedan <p class="badge badge-success">6</p> disponibles</div>
						</div>
					</div>
				</tr>


			</table>
		</div>
	</div>
</div>
<!--fin de las cartas-->

<div class="container-fluid float-center" >
	
	<div id="demo" class="carousel slide"  data-ride="carousel" >
	<!--INDICADORES-->
	<ul class="carousel-indicators">
		<li data-target="demo" data-slide-to="0" class="active"></li>
		<li data-target="demo" data-slide-to="1"></li>
		<li data-target="demo" data-slide-to="2"></li>
	</ul>

	<!--IMAGENES-->
<div class="carousel-inner">
	<div class="carousel-item active"><img src="img/Renzarda.jpg" class="img-fluid" alt="" >
	<div class="carousel-caption">
		<img src="img/bitcoin.png">
		<p>S&oacute;lo con <p class="badge badge-warning">Bitcoins</p></p>
	
</div>
	</div>

	<div class="carousel-item">
		<img src="img/Renzarda1.jpg" class="img-fluid" alt="" >
	<div class="carousel-caption">
		<img src="img/bitcoin.png" >
		<p>S&oacute;lo con <p class="badge badge-warning">Bitcoins</p></p>
		</div>
	</div>

	<div class="carousel-item">
		<img src="img/Renzarda2.jpg" class="img-fluid" alt="" >
	<div class="carousel-caption">
		<img src="img/bitcoin.png">

		<p>S&oacute;lo con <p class="badge badge-warning">Bitcoins</p></p>
	
</div>
	</div>

	<!--CONTROLES DE IZQUIERDA Y DERECHA-->
	<a href="#demo" class="carousel-control-prev" data-slide="prev"> <span class="carousel-control-prev-icon"></span></a>
	<a href="#demo" class="carousel-control-next" data-slide="next"> <span class="carousel-control-next-icon"></span></a>
	

</div>
</div>
</div>
<div class="container-fluid justify-content-between">
	
	<hr/ class="bg-dark">



	<a class="navbar-brand float-left" ><img style="width: 100px;" src="img/Logo2.png" ></a>

	
	<a class="navbar-brand float-right" ><img style="width: 100px;" src="img/Logo3.png" ></a>

	<center>
		<button class="btn" class="float-center"><a href="index.html">Volver arriba</a></button>	
		<br>
Sitio web hecho 100% con BootsTrap. Todos los derechos e izquierdos reservados. 
<br>
<br>
Renzo Marangon; CONSUDEC Profesorado de Inform&aacute;tica 2019-2020

</center>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>