<?php
require_once "models/get.model.php";
    class getController
    {
        static public function obtenerEstudiantes()
        {
            return getModel::obtenerEstudiantes();        
        }
        static public function obtenerProfesores()
        {   
            return getModel::obtenerProfesores();
        }
    }