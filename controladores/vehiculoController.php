<?php

class vehiculoController extends controladorBase{
	public $conectar;
	public $adaptador;

	public function __construct(){
		parent::__construct();

		$this->conectar=new conectar();
        $this->adaptador=$this->conectar->conexion();
	}

	public function index(){
		//creamos el objeto vehiculo
		$vehiculo = new vehiculo($this->adaptador);
		//conseguimos todas las vehiculo
		$allvehiculos=$vehiculo->getAll("id_vehiculo");
		foreach ($allvehiculos as $key => $value) {
		}
		//cargamos la vista vehiculo y le pasamos valores
		$this->vistas("vehiculo", array(
		    "allvehiculos" => $allvehiculos
		));
	}

	public function crear(){
        if(isset($_POST["matricula"])){
             
            //Creamos un usuario
            $vehiculo=new vehiculo($this->adaptador);
            $vehiculo->setMatricula($_POST["matricula"]);
            $vehiculo->setModelo($_POST["modelo"]);
            $save=$vehiculo->save();
        }
        $this->redirect("vehiculo", "index");
    }


}


?>