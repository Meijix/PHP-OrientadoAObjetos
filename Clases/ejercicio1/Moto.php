<?php

//crea aqui la clase Moto junto con dos propiedades public
class Moto{
	//declaracion de propiedades
	public $color;
	public $marca;
}
//crea aqui la instancia o el objeto de la clase Moto
$moto1 = new Moto;
//inicializamos el mensaje que lanzara el servidor con vacio
 if ( !empty($_POST)){

 	 // recibe aqui los valores mandados por post y arma el mensaje para front 
 }  


//Dos nuevos inputs con su respectivo label dentro del formulario
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
	<form method="post">
	<input type="text" name="color" placeholder="color">
	<input type="text" name="marca" placeholder="marca">
	<input type="submit" value="enviar">
	</form>
</body>
</html>