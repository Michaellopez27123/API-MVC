<?php
require_once "controllers/get.controller.php";
$endpointPrincipal = $routes_array[2];
$respose = new getController();

if(str_contains($endpointPrincipal, "estudiantes")){
    if(count($routes_array) == 3){
        $endpointSecundario = $routes_array[3];
        if(str_contains($endpointSecundario, "notas")){
            echo "Estas son las notas de los estuantes";
        }
        else if(str_contains($endpointSecundario, "asignaturas")){
            echo "Estas son las asignaturas de los estuantes";
        }
    }
    else{
        echo json_encode($respose -> obtenerEstudiantes());   
    }
}
else if(str_contains($endpointPrincipal, "profesores")){
    echo json_encode($respose -> obtenerProfesores());
}

