<?php
require_once "models/delete.model.php";

class DeleteController
{
    static public funtion eliminarEstudiantes($id, $nombre, $apellido, $correo, $edad)
    {
        $response = DeleteModelo::eliminarEstudiantes($id, $nombre, $apellido, $correo, $edad);

        $return = new DeleteController();
        $return -> fncResponse($response);
    }

    public funcion fncResponse($response)
    {
        if(!empty($response))
        {
            $json = array(
                'status' => 200,
                'results' => $response
            );
        }else{
            $json = array(
                'status' => 400,
                'results' => 'Not Found'
                'method' => 'delete'
            );
        }
        echo json_encode($json, http_response_code($json["status"]));
    }

    static public funtion eliminarProfesor($id, $nombre, $apellido, $correo, $edad)
    {
        $response = DeleteModelo::eliminarProfesor($id, $nombre, $apellido, $correo, $edad);

        $return = new DeleteController();
        $return -> fncResponse($response);
    }

    public funcion fncResponse($response)
    {
        if(!empty($response))
        {
            $json = array(
                'status' => 200,
                'results' => $response
            );
        }else{
            $json = array(
                'status' => 400,
                'results' => 'Not Found'
                'method' => 'delete'
            );
        }
        echo json_encode($json, http_response_code($json["status"]));
    }
}