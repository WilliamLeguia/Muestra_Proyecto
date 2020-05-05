<?php

class noLogController extends controladorBase{
	public $conectar;
	public $adaptador;

	public function __construct(){
		parent::__construct();

		$this->conectar=new conectar();
        $this->adaptador=$this->conectar->conexion();
	}

	public function index(){
		$vista=$_GET["id"];

		$this->PantallaVista($vista);
	}

	public function registro(){
		$this->PantallaVista("registro");
	}

	public function crear(){
        if(isset($_POST["nombre"])){
             
            //Creamos un usuario
            $usuario=new usuario($this->adaptador);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setEdad($_POST["edad"]);
            $save=$usuario->save();
        }
        echo 'Te has regristrado';
        header('Refresh: 3; URL = index.php');
    }
}

?>