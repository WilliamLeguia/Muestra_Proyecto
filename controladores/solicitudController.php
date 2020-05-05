
<?php
class solicitudController extends controladorBase{
	public $conectar;
	public $adaptador;

	public function __construct(){
		parent::__construct();

		$this->conectar=new conectar();
        $this->adaptador=$this->conectar->conexion();
	}

	public function index(){

		$rolUsuario=$_SESSION['rol'] ;
		$idUser = $_SESSION['idUsuario'];
		//echo $idUser;

		if ($rolUsuario==1 or $rolUsuario== 2 or $rolUsuario == 3 or $rolUsuario == 4 or $rolUsuario == 5) {
			//creamos el objeto solicitud
		$solicitud = new solicitud($this->adaptador);
		//conseguimos todas las solicitudes
		$allSolicitudes=$solicitud->getBy("foranea_usuario", $idUser);
		
		if (isset($allSolicitudes)) {
			/*foreach ($allSolicitudes as $key => $value) {
			}*/
		//cargamos la vista solicitudes y le pasamos valores
		$this->vistas("solicitudes", array(
		    "allSolicitudes" => $allSolicitudes
		));
			# code...
		}else{
			$this->PantallaVista("solicitudes");
		}

		}else{
			echo "usuario no existe, acceso restringido";
		}
		
	}

	public function escribir(){
		if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}

	}

	public function nuevaSolicitud(){
		$rolUsuario=$_SESSION['rol'] ;

		if ($rolUsuario==1 or $rolUsuario== 2 or $rolUsuario == 3 or $rolUsuario == 4 or $rolUsuario == 5) {

			$reparacion = new reparacion($this->adaptador);
			$marca = new marca($this->adaptador);
		//conseguimos todas las reparaciones
		$allReparaciones=$reparacion->getAll("id_reparacion");
		$allMarcas = $marca->getAll("id_marca");
		/*foreach ($allReparaciones as $key => $value) {
			echo $value->id_reparacion;
		}*/
		//cargamos la vista reparaciones y le pasamos valores
		$this->vistas("solicitarReparacion", array(
		    "allReparaciones" => $allReparaciones, 
		    "allMarcas" => $allMarcas
		));
		
		}else{
			echo "usuario no existe, acceso restringido";
		}

	}

	public function marcas(){
		if(isset($_POST['submit'])){
			$selected_val = $_POST['marca'];  // Storing Selected Value In Variable
			$_SESSION['marca']=$_POST['marca'];
			$reparacion = new reparacion($this->adaptador);
			$marca = new marca($this->adaptador);
			$porMarca = $reparacion->porMarca($selected_val);
			$allMarcas = $marca->getAll("id_marca");

			$this->vistas("solicitarReparacion", array(
		    "porMarca" => $porMarca, 
		    "allMarcas" => $allMarcas
		));
		}
	}

	public function crear(){
		if(isset($_POST["dateFrom"])){
            //Creamos un objeto solicitud
             $fecha= (string)$_POST["dateFrom"];
            $solicitud=new solicitud($this->adaptador);
            $solicitud->setForanea_usuario($_SESSION["idUsuario"]);
            $solicitud->setForanea_marca($_SESSION['marca']);
            $solicitud->setFecha($fecha);
            $solicitud->setMotivo($_POST["motivo"]);
            $save=$solicitud->save();
            $objsolicitud = new solicitud($this->adaptador);
            $objsolicitud = $solicitud->ultimo();

            $numero = $objsolicitud->id_solicitud;
            echo $solicitud->getForanea_marca();

            foreach ($_POST['reparacion'] as $select){
				$solicitud->insertar($numero,$select);
			}
        }  
       $this->redirect("solicitud", "index");
	}
	
}


?>