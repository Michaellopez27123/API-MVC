<?php
require_once "models/conexion.php";
require_once "controllers/delete.controller.php"

if(isset($_GET["id"]) && isset($_GET["nombre"])& & isset($_GET["apellido"]) && isset($_GET["correo"]) && isset($_GET["edad"]))
{
    $columns = array($GET["id"]);

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
    $response -> deleteEstudiantes($table,$_GET["id"],$_GET["nombre"],$_GET["apellido"],$_GET["correo"],$_GET["edad"]);
    $response -> deleteProfesores($table,$_GET["id"],$_GET["nombre"],$_GET["apellido"],$_GET["correo"],$_GET["edad"]);
}