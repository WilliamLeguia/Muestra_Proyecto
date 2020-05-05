<?php
class usuariosModelo extends modeloBase{
    private $table;
     
    public function __construct($adaptador){
        $this->table="usuarios";
        parent::__construct($this->table, $adaptador);
    }
     
    //Metodos de consulta
    public function getUnUsuario(){
        $query="SELECT * FROM usuarios WHERE id='1'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>
