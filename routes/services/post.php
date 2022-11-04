<?php
require_once "controllers/post.controller.php";
$endpointPrincipal = $routes_array[2];
$respose = new postController();

if(str_contains($endpointPrincipal, "estudiantes")){
    $body = json_decode(file_get_contents("php://input"),true);
    $id = $body["id"];
    $nombre = $body["nombre"];
    $apellido = $body["apellido"];
    $correo = $body["correo"];
    $edad = $body["edad"];
    // $id = $_POST["id"];
    // $nombre = $_POST["nombre"];
    // $apellido = $_POST["apellido"];
    // $correo = $_POST["correo"];
    // $edad = $_POST["edad"];
    echo json_encode($respose -> agregarEstudiantes($id, $nombre, $apellido, $correo, $edad));   
    
}
else if(str_contains($endpointPrincipal, "profesores")){
    $body = json_decode(file_get_contents("php://input"),true);
    $id = $body["id"];
    $nombre = $body["nombre"];
    $apellido = $body["apellido"];
    $correo = $body["correo"];
    $edad = $body["edad"];
    // $id = $_POST["id"];
    // $nombre = $_POST["nombre"];
    // $apellido = $_POST["apellido"];
    // $correo = $_POST["correo"];
    // $edad = $_POST["edad"];
    echo json_encode($respose -> agregarProfesores($id, $nombre, $apellido, $correo, $edad)); 
}
