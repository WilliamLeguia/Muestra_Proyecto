<?php
class iniciarController extends controladorBase{
	public $conectar;
	public $adaptador;

	public function __construct(){
		parent::__construct();

		$this->conectar=new conectar();
        $this->adaptador=$this->conectar->conexion();
	}

	public function index(){

		$this->PantallaVista("usuario");
	}

	public function sesion(){
		if(isset($_POST['correo']) && isset($_POST['contrasena'])){
			$user = new usuario($this->adaptador);
		$nombre =	$_POST['correo'];
		$contra = $_POST['contrasena'];
			$user = $user->getlog($nombre, $contra);
			//$user = $user->getlog(isset($_POST['correo']), isset($_POST['contrasena']));

			if(isset($user)){

				echo $user->id;
				$_SESSION['valid'] = true;
				$_SESSION['timeout'] = time();
				$_SESSION['usuario'] = $user->nombre;
				$_SESSION['rol'] = $user->foranea_tipo;
				$_SESSION['idUsuario']=$user->id;

				echo "sesion valida";
				echo $_SESSION['rol'];

				header('Refresh: 3; URL = index.php');
			}else{
				echo "algo esta mal";
				header('Refresh: 3; URL = index.php');
			}
		}
	}



}


?>