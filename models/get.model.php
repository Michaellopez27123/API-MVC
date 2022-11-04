<?php
require_once "conexion.php";

class getModel
{
    static public function obtenerEstudiantes()
    {
        $sql = "SELECT * FROM estudiantes";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            $results = $stmt-> fetchAll(PDO::FETCH_OBJ);
            return $results;
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
    static public function obtenerProfesores()
    {
        $sql = "SELECT * FROM profesores";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            $results = $stmt-> fetchAll(PDO::FETCH_OBJ);
            return $results;
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
    

}
