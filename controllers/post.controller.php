<?php
require_once "models/post.model.php";
    class postController
    {
    
        static public function agregarEstudiantes($id, $nombre, $apellido, $correo, $edad)
        {   
            return postModel::agregarEstudiantes($id, $nombre, $apellido, $correo, $edad);
        }
        static public function agregarProfesores($id, $nombre, $apellido, $correo, $edad)
        {   
            return postModel::agregarProfesores($id, $nombre, $apellido, $correo, $edad);
        }
    }