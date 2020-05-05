<?php
class reparacionController extends controladorBase{
	public $conectar;
	public $adaptador;

	public function __construct(){
		parent::__construct();

		$this->conectar=new conectar();
        $this->adaptador=$this->conectar->conexion();
	}

	public function index(){

		$rolUsuario=$_SESSION['rol'] ;
		//echo $rolUsuario;

		if ($rolUsuario==1 or $rolUsuario== 2 or $rolUsuario == 3 or $rolUsuario == 4 or $rolUsuario == 5) {
			//creamos el objeto reparacion
		$reparacion = new reparacion($this->adaptador);
		//conseguimos todas las reparaciones
		$allReparaciones=$reparacion->getAll("id_reparacion");
		/*foreach ($allReparaciones as $key => $value) {
			echo $value->id_reparacion;
		}*/
		//cargamos la vista reparaciones y le pasamos valores
		$this->vistas("reparaciones", array(
		    "allReparaciones" => $allReparaciones
		));
		}else{
			echo "usuario no existe, acceso restringido";
		}
		
	}

	public function reparacionesEncargado(){
		$rolUsuario=$_SESSION['rol'] ;
		echo $rolUsuario;

		if ($rolUsuario == 5) {
			# code...
		}else{
			$this->redirect("Usuarios", "index");
		}
	}


}


?>