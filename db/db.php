<?php
class Conectar{
    public static function conexion(){
        $conexion = new PDO('mysql:host=localhost;dbname=calculator', "root", "@gobiernoit2015");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;        
    }
}
?>
