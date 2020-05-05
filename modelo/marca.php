<?php 

class marca extends entidadBase{
	private $id_marca;
	private $foranea_reparacion;
	private $nombre;

	public function __construct($adaptador){
		$tabla="marca";
		parent::__construct($tabla, $adaptador);
	}

	public function getId() {
        return $this->id_marca;
    }
 
    public function setId($id) {
        $this->id_marca = $id;
    }
     
    public function getMatricula() {
        return $this->foranea_reparacion;
    }
 
    public function setMatricula($nuevoValor) {
        $this->foranea_reparacion = $nuevoValor;
    }
 
    public function getModelo() {
        return $this->nombre;
    }
 
    public function setModelo($nuevoValor) {
        $this->nombre = $nuevoValor;
    }
 
    public function save(){
        $query="INSERT INTO marca (id_marca,foranea_reparacion,nombre)
                VALUES(NULL,
                       '".$this->foranea_reparacion."',
                       '".$this->nombre."');";
        $save=$this->get_BaseDatos()->query($query);
        //$this->db()->error;
        return $save;
    }
}


?>