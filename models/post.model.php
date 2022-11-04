<?php
require_once "conexion.php";

class postModel
{   
    static public function agregarEstudiantes($id, $nombre, $apellido, $correo, $edad)
    {
        $sql = "INSERT INTO `estudiantes` (`id_estudiante`, `nombre_estudiante`, `apellido_estudiante`, `correo_estudiante`, `edad`) 
                VALUES ('".$id."', '".$nombre."', '".$apellido."', '".$correo."', '".$edad."');";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            return "Agrego todo corrrectamente";
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
    static public function agregarProfesores($id, $nombre, $apellido, $correo, $edad)
    {
        $sql = "INSERT INTO `profesores` (`id_profesor`, `nombre_profesor`, `apellido_profesor`, `correo_profesor`, `edad_profesor`) 
        VALUES ('".$id."', '".$nombre."', '".$apellido."', '".$correo."', '".$edad."');";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            return "Agrego todo corrrectamente";
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
    

}