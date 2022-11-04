<?php

    $routes_array = $_SERVER['REQUEST_URI'];
    $routes_array  = explode("/", $routes_array);
    $routes_array = array_filter($routes_array);

    if(count($routes_array) == 1)
    {
        $arrayResponse = array(
            'status' => 400,
            'Mensaje' => "La url base no esta configurada para peticiones deberia agregar la parte del end point correspondiente para la funcion que necesita"
        );
        echo json_encode($arrayResponse, http_response_code($arrayResponse['status']));
    }
    else if(count($routes_array) >= 2)
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            include "services/get.php";
           
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            include "services/post.php";
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'PUT')
        {
            include "services/put.php";
        }
        elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE')
        {
            include "services/delete.php";
        }
    }
   
