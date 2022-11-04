<?php
require_once "models/conexion.php";
require_once "controllers/put.controller.php"

if(isset($_GET["id"]) && isset($_GET["nombre"])& & isset($_GET["apellido"]) && isset($_GET["correo"]) && isset($_GET["edad"]))
{

    $data = array();
    $data = array();
    parse_str(file_get_content('php:/input'), $data);


    $columns = array();
    foreach(array_keys($data) as $key => $value) {
        array_push($columns, $value);
    }

    array_push($columns, $_GET["id"]);
    $columns = array_unique($coluns);

    if(empty(Conexion::getcolumnsData($table, $columns)))
    {
        $json = array(
            'status' => 400,
            'results' => "Error: Conexion en la base de datos"
        );

        echo json_encode($json, http_response_code($json["status"]));

        return;
    }


    $response = new DeleteController();
    $response -> putEstudiantes($table,$_GET["id"],$_GET["nombre"],$_GET["apellido"],$_GET["correo"],$_GET["edad"]);
    $response -> putProfesores($table,$_GET["id"],$_GET["nombre"],$_GET["apellido"],$_GET["correo"],$_GET["edad"]);
}