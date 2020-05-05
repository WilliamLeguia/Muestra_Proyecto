<?php

class reparacion extends entidadBase{
	private $id_reparacion;
	private $foranea_estado;
	private $nombre_repa;
	private $valor_repa;

	public function __construct($adaptador){
		$tabla="reparacion";
		$id_reparacion ="id_reparacion";
		parent::__construct($tabla, $adaptador);
	}

	public function getId(){
		return $this->id_reparacion;
	}

	public function setId($id){
		$this->id_reparacion = $id;
	}

	public function getForanea_estado(){
		return $this->foranea_estado;
	}

	public function setForanea_estado($nuevoValor){
		$this->foranea_estado = $nuevoValor;
	}

	public function getNombreReparacion(){
		return $this->nombre_repa;
	}

	public function setNombreReparacion($nuevoValor){
		$this->$nombre_repa = $nuevoValor;
	}

	public function getValorReparacion(){
		return $this->valor_repa;
	}

	public function setValorReparacion($nuevoValor){
		$this->valor_repa = $nuevoValor;
	}

	public function save(){
		$query="INSERT INTO reparacion (id_reparacion, foranea_estado, nombre_repa, valor_repa)
		        VALUES(NULL,
		        		'".$this->foranea_estado."',
		               '".$this->nombre_repa."',
		               '".$this->valor_repa."');";
		$save = $this->get_BaseDatos()->query($query);
		return $save;
	}

	public function porMarca($marca){
		$query= "SELECT c.id_reparacion, c.foranea_estado, c.nombre_repa, c.valor_repa
				FROM marca a
        		inner join
  				  marca_reparacion b
        		  on a.id_marca = b.marca_id_marca
       			inner join 
               reparacion c
        	   on b.reparacion_id_reparacion = c.id_reparacion
    		   WHERE a.id_marca = $marca";
    	$save = $this->get_BaseDatos()->query($query);
    	while ($row = $save->fetch_object()){
			$result[]=$row;
		}

		return $result;	   
	}
}



?>