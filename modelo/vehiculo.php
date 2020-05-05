<?php 

class vehiculo extends entidadBase{
	private $id_vehiculo;
	private $matricula;
	private $modelo;

	public function __construct($adaptador){
		$tabla="vehiculo";
		$id_reparacion ="id_vehiculo";
		parent::__construct($tabla, $adaptador);
	}

	public function getId() {
        return $this->id_vehiculo;
    }
 
    public function setId($id) {
        $this->id_vehiculo = $id;
    }
     
    public function getMatricula() {
        return $this->matricula;
    }
 
    public function setMatricula($nuevoValor) {
        $this->matricula = $nuevoValor;
    }
 
    public function getModelo() {
        return $this->modelo;
    }
 
    public function setModelo($nuevoValor) {
        $this->modelo = $nuevoValor;
    }
 
    public function save(){
        $query="INSERT INTO vehiculo (id_vehiculo,matricula,modelo)
                VALUES(NULL,
                       '".$this->matricula."',
                       '".$this->modelo."');";
        $save=$this->get_BaseDatos()->query($query);
        //$this->db()->error;
        return $save;
    }
}


?>