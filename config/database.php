<?php
class conectar {
    public static function conexion(){
        $conexion = new mysqli("localhost", "root", "", "mvc");
        return $conexion; 
    
    }
}

?>