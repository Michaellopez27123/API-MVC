<?php  
require_once "conexion.php";
require_once "get.model.php";

class DeleteModel
{
    static public function deleteEstudiantes($id, $nombre, $apellido, $correo, $edad)
    {
        $response = getModel::getEstudiantesFilter($id, $nombre, $apellido, $correo, $edad, null, null, null, null, null);

        if(empty($response))
        {
            return null;
        }
    }


    $sql = "DELETE FROM estudiantes WHERE $id = $id";

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

    

    static public function deleteProfesor($id, $nombre, $apellido, $correo, $edad)
    {
        $response = getModel::getProfesorFilter($id, $nombre, $apellido, $correo, $edad, null, null, null, null, null);

        if(empty($response))
        {
            return null;
        }
    }


    $sql = "DELETE FROM profesores WHERE $id = $id";

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