<?php  
include_once('transporte.php');

	//declaracion de la clase hijo o subclase Carro
	class carro extends transporte{

		private $numero_puertas;

		//declaracion de constructor
		public function __construct($nom,$vel,$com,$pue){
			//sobreescritura de constructor de la clase padre
			parent::__construct($nom,$vel,$com);
			$this->numero_puertas=$pue;
				
		}

		// declaracion de metodo
		public function resumenCarro(){
			// sobreescribitura de metodo crear_ficha en la clse padre
			$mensaje=parent::crear_ficha();
			$mensaje.='<tr>
						<td>Numero de puertas:</td>
						<td>'. $this->numero_puertas.'</td>				
					</tr>';
			return $mensaje;
		}
	} 

	class avion extends transporte{

		private $numero_turbinas;
		
		//sobreescritura de constructor
		public function __construct($nom,$vel,$com,$tur){
			parent::__construct($nom,$vel,$com);
			$this->numero_turbinas=$tur;
		}

		// sobreescritura de metodo
		public function resumenAvion(){
			$mensaje=parent::crear_ficha();
			$mensaje.='<tr>
						<td>Numero de turbinas:</td>
						<td>'. $this->numero_turbinas.'</td>				
					</tr>';
			return $mensaje;
		}
	}

	class barco extends transporte{
		private $calado;

		//sobreescritura de constructor
		public function __construct($nom,$vel,$com,$cal){
			parent::__construct($nom,$vel,$com);
			$this->calado=$cal;
		}

		// sobreescritura de metodo
		public function resumenBarco(){
			$mensaje=parent::crear_ficha();
			$mensaje.='<tr>
						<td>Calado:</td>
						<td>'. $this->calado.'</td>				
					</tr>';
			return $mensaje;
		}
	}

$mensaje='';


if (!empty($_POST)){
	//declaracion de un operador switch
	switch ($_POST['tipo_transporte']) {
		case 'aereo':
			//creacion del objeto con sus respectivos parametros para el constructor
			$jet1= new avion('jet','400','gasoleo','2');
			$mensaje=$jet1->resumenAvion();
			break;
		case 'terrestre':
			$carro1= new carro('carro','200','gasolina','4');
			$mensaje=$carro1->resumenCarro();
			break;
		case 'maritimo':
			$bergantin1= new barco('bergantin','40','na','15');
			$mensaje=$bergantin1->resumenBarco();
			break;		
	}

}

?>
