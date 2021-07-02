<?php 
	
	require_once "clases/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from usuarios where email='admin'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		$validar=1;
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">Fiestas de Octubre</div>
					<div class="panel panel-body">
						<p>
							<img src="img/SEJ.jpg"  width="200px" height="100px">
						</p>
						<form id="frmLogin">
							<label>Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control input-sm">
							<p></p>
							<span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
							<?php  if(!$validar): ?>
							<a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
							<?php endif; ?>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<section>
    	<footer>
    		<p class="box-title">
            	<h1 style="color: white;">Programación para internet</h1>
            	<h2 style="color: white;">Jesus Eduardo Hinojosa Perez</h2>
        	</p>
       		<p>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal., D15, Departamento de Ciencias Computacionales y Electrónica</p>
   		 </footer>
    </section>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

		vacios=validarFormVacio('frmLogin');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

		datos=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/login.php",
			success:function(r){

				if(r==1){
					window.location="vistas/inicio.php";
				}else{
					window.location="vistas/inicio.php";
				}
			}
		});
	});
	});
</script>
<style>
	section{/*esto va de bajo de la caja cebecera*/
    padding-top: 7.5vw;/*espacio para comenzar en este caso es hasta arriba
    /*background-size: cover;/*la imagen de fondo se rellena para que no quede espacio
    background-position: center center;la imagen de fondo queda al centro*/
    width: 99vw;/*anchura de la imagen*/
    height: 100vh;/*altura de la imagen*/
}
	section .box-title{
    width: 100vw;
}

footer{/*parte de abajo de la pagina*/
    background-color: gray;/*color de pie de pagina*/
    width: 96vw;/*anchura de pie de pagina*/
    padding: 1vw 2vw;/*rellena el espacio del pie de pagina*/
}

footer p{/*texto en pie de pagina*/
    margin: 0;/*margen*/
    padding: 0;/*relleno*/
    color: #fff;/*color del texto*/
}
</style>

