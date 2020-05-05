<?php

class solicitud extends entidadBase{
	private $id_solicitud;
	private $foranea_estado;
	private $foranea_usuario;
	private $foranea_marca;
	private $fecha;
	private $motivo;

	public function __construct($adaptador){
		$tabla="solicitud";
		$id_solicitud ="id_solicitud";
		parent::__construct($tabla, $adaptador);
	}

	public function getId(){
		return $this->id_solicitud;
	}

	public function setId($id){
		$this->id_solicitud = $id;
	}

	public function getForanea_estado(){
		return $this->foranea_estado;
	}

	public function setForanea_estado($nuevoValor){
		$this->$foranea_estado = $nuevoValor;
	}

	public function getForanea_usuario(){
		return $this->foranea_usuario;
	}

	public function setForanea_usuario($nuevoValor){
		$this->foranea_usuario = $nuevoValor;
	}

	public function getForanea_marca(){
		return $this->foranea_marca;
	}

	public function setForanea_marca($nuevoValor){
		$this->foranea_marca = $nuevoValor;
	}

	public function setFecha($nuevoValor){
		$this->fecha = $nuevoValor;
	}

	public function setMotivo($nuevoValor){
		$this->motivo = $nuevoValor;
	}

	public function save(){
		$foranea_estado ="3";
		$query="INSERT INTO solicitud (id_solicitud, foranea_estado, foranea_usuario, foranea_marca, fecha, motivo)
		        VALUES(NULL,
		               '".$foranea_estado."',
		               '".$this->foranea_usuario."',
		               '".$this->foranea_marca."',
		               '".$this->fecha."',
		               '".$this->motivo."'
		           );";
		$save = $this->get_BaseDatos()->query($query);
		return $save;
	}

	public function ultimo(){
		$query = "SELECT id_solicitud FROM solicitud  
					ORDER BY id_solicitud DESC  
					LIMIT 1;";
		$resultado = $this->get_BaseDatos()->query($query);
		$objeto = $resultado->fetch_object();
		return $objeto;
	}

	public function insertar($valorUltimo,$idDeLaReparacion){
		$query = "INSERT INTO solicitud_reparacion (solicitud_id_solicitud, reparacion_id_reparacion)
					VALUES ('".$valorUltimo."','".$idDeLaReparacion."');";
		$this->get_BaseDatos()->query($query);

	}
}



?>