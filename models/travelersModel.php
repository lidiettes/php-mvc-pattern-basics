<?php

class travelers_model{
    private $db;
    private $travelers;

    public function __construct(){
        $this->db = Conectar::conexion();
        $this->travelers = array();
    }
    public function get_travelers(){
        $sql = "SELECT * FROM travelers";
        $resultado = $this-> db->query($sql);
        while ($row = $resultado->fetch_assoc()){
            $this->travelers[] = $row;
        }
        return $this->travelers;
    }
}
?>