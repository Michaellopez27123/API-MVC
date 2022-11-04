<?php
require_once "models/put.model.php";

class PutController
{
    static public funtion putEstudiantes($id, $nombre, $apellido, $correo, $edad)
    {
        $response = PutModelo::putEstudiantes($id, $nombre, $apellido, $correo, $edad);

        $return = new PutController();
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
                'method' => 'put'
            );
        }
        echo json_encode($json, http_response_code($json["status"]));
    }

    static public funtion putProfesor($id, $nombre, $apellido, $correo, $edad)
    {
        $response = PutModelo::putProfesor($id, $nombre, $apellido, $correo, $edad);

        $return = new PutController();
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
                'method' => 'put'
            );
        }
        echo json_encode($json, http_response_code($json["status"]));
    }
}