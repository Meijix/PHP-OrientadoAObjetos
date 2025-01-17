<?php
//creación de la clase carro
class Carro2{
	//declaracion de propiedades
	public $color;
	public $modelo;

	//declaracion del método verificación
	public function verificacion(){
		
	}
}

//creación de instancia a la clase Carro
$Carro1 = new Carro2();

if (!empty($_POST)){
	$Carro1->color=$_POST['color'];
	$Carro1->modelo=$_POST['modelo'];
}




