<?php #inicio de vista de ventas con login

	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !==true){
		header("location: index.php");
		exit;
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>	
	<title>MAU PAN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="CSS/maupan.css">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="JS/script.js"></script>
</head>
<body>
<nav id ="menu" class="row" class="navbar-inverse bg-link fixed-top">
      <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><hr>
			<a href="#"><img id="logo" src="diseño/logo.png" alt=""></a>
            <a href="cerrar.php"><i class="fa fa-fw fa-home"></i> Cerrar</a>
            <a href="#services"><i class="fa fa-fw fa-users"></i> Nosotros</a>
            <a href="#clients"><i class="fa fa-fw fa-user"></i> Cursos AVA</a>
            <a href="#contact"><i class="fa fa-fw fa-comments"></i> Noticias</a>
            <a href="#contact"><i class="fa fa-fw fa-user-plus"></i> Únete</a>
            <a href="#contact"><i class="fa fa-fw fa-bell"></i> Contacto</a>
          </div>
          </div>
          </div>
          <div>
            <span id="main" style="font-size:30px; cursor:pointer; right: 20px;color:white;" onclick="openNav()">&#9776;</span>
          </div></a>
          </div>
          
  </nav>

  <div class="container">
  <section class="row">
  <div class="col col-md-1">
  </div>
  <table id="tablee" class="table table-hover col col-md-8" class="overflow-auto">
  <thead>
<tr>

<th scope="col">Ticket</th>
<th scope="col">Producto</th>
<th scope="col">Cantidad</th>
<th scope="col">Precio</th> 
<th scope="col">Total</th>
</tr>
</thead>
<tbody class="table table-bordered">
<tr>
<td></td>
	<td></td>
	<td id="cantidad"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>

</tbody>
  </table>

  </section>
  </div>
  
 
<div class="container">
</div>  
<div class="row justify-content-center">	
<table id="lista_productos" class="col col-md-8 table table-dark ">
	
		<tr style="padding-left: 10px;" >
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Migajon'">Migajon</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Reinas'">Reinas</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Cuadro Frutal'">Cuadro Frutal</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Pambazo'">Pambazo</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" style="background-color: #E3AC3E;" onclick="document.getElementById('mi_migajon').innerHTML = ''">Respuesto</button></td>
		   
		</tr>
		<tr></tr>
		<tr class="mt-2">
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Reposteria'">Reposteria</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Pastelito'">Pastelito</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Rebanada de pastel'">Rebanada de pastel</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" onclick="document.getElementById('mi_migajon').innerHTML = 'Ratones'">Ratones</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" style="background-color: #E3AC3E;"></button></td>
		</tr>
		<tr>
			<td class="contenedor_productos"><button class="btn btn-block">Mostrador</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Carlotas</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Rollitos de jamon</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Especial</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" style="background-color: #E3AC3E;"></button></td>
		</tr>
		<tr>
			<td class="contenedor_productos"><button class="btn btn-block">Variedad</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Bolinachos</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Bollitos de queso</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Bolillo artesanal</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" style="background-color: #E3AC3E;"></button></td>
		</tr>
		<tr>
			<td class="contenedor_productos"><button class="btn btn-block">Bolillo</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Baguette</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Bolillo y telera</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Bolillo c/ajonjoli</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" style="background-color: #E3AC3E;"></button></td>
		</tr>
		<tr>
			<td class="contenedor_productos"><button class="btn btn-block">Teleras</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Bolillo integral</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Tanto imedio</button></td>
			<td class="contenedor_productos"><button class="btn btn-block">Telera c/ajonjoli</button></td>
			<td class="contenedor_productos"><button class="btn btn-block" style="background-color: #E3AC3E;"></button></td>
		</tr>
</table>
<div class="col col-md-3">
	<div class="numeros"  >
		<div>
			<button id="n1">1</button>
			<button id="n2">2</button>
			<button id="n3">3</button>
		</div>
		<div>
			<button id="n4">4</button>
			<button id="n5">5</button>
			<button id="n6">6</button>
		</div>
		<div>
			<button id="n7">7</button>
			<button id="n8">8</button>
			<button id="n9">9</button>
		</div>
		<div>
			<button id="n0">0</button>
			<button id="c" style="background-color:#E3AC3E">Borrar</button>
		</div>
    </div>
</div> 

<div class="container mt-3">
<section class="row justify-content-end">
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#E66262;border-radius:20px">Abarrotes</button>
   </div>
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#CFB365;border-radius:20px">Cliente 1</button>
   </div>
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#CFB365;border-radius:20px">Cliente 2</button>
   </div>
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#CFB365;border-radius:20px">Cliente 3</button>
   </div>
   <div class="col col-md-2"></div>
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#E66262;border-radius:20px">Cancelar</button>
   </div>
</section>
</div>
<div class="container mt-2">
<section class="row justify-content-end">
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#CFB365;border-radius:20px">Nuevo</button>
   </div>
</section>
</div>
<div class="container mt-2">
<section class="row justify-content-end">
   <div class="col col-md-2">
		<button class="btn  btn-block" style="background-color:#E3AC3E;border-radius:20px">REGISTRO</button>
   </div>
</section>
</div>


  
	<script src="JS/jquery.js"></script>
	<script src="JS/bootstrap.min.js"></script>
</body>
</html>