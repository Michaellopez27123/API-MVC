<?php  
require_once "conexion.php";
require_once "get.model.php";

class PutModel
{
    static public function putEstudiantes($id, $nombre, $apellido, $correo, $edad)
    {
        $response = getModel::getEstudiantesFilter($id, $nombre, $apellido, $correo, $edad, null, null, null, null, null);

        if(empty($response))
        {
            return null;
        }
    }


    $set = "";
    foreach ($data as $key => $value)
    {
        $set .= $key." = :".$key.",";
    }
    
    $set =substr($set, 0, -1);
    
    $sql = "UPDATE FROM estudiantes WHERE $id = $id";

    $link = Conexion::conectar();
    $stmt = $link->prepare($sql);

    $stmt->bindParam(":".$$id, PDO::PARAM_STR);
    if($stmt -> execute())
    {
        $response = array(
            "comment" => "El proceso se realizo satisfactorio"
        );
        return $response;
    }else{
        return $link->errorInfo(); 
    }



    static public function putProfesores($id, $nombre, $apellido, $correo, $edad)
    {
        $response = getModel::getProfesoresFilter($id, $nombre, $apellido, $correo, $edad, null, null, null, null, null);

        if(empty($response))
        {
            return null;
        }
    }


    $set = "";
    foreach ($data as $key => $value)
    {
        $set .= $key." = :".$key.",";
    }
    
    $set =substr($set, 0, -1);
    
    $sql = "UPDATE FROM profesores WHERE $id = $id";

    $link = Conexion::conectar();
    $stmt = $link->prepare($sql);

    $stmt->bindParam(":".$$id, PDO::PARAM_STR);
    if($stmt -> execute())
    {
        $response = array(
            "comment" => "El proceso se realizo satisfactorio"
        );
        return $response;
    }else{
        return $link->errorInfo(); 
    }

}