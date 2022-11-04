<?php
    class Conexion
    {
        static public function infoDatabase()
        {
            $infoDB = array(
                "host" => "localhost",
                "database" => "db_as1",
                "user" => "root",
                "password" => ""
            );
            return $infoDB;

        }

        static public function conectar()
        {
            try
            {
                $link = new PDO(
                    "mysql:host=".Conexion::infoDatabase()["host"].";dbname=".Conexion::infoDatabase()["database"],
                    Conexion::infoDatabase()["user"],
                    Conexion::infoDatabase()["password"]
                );
                $link ->exec("set names utf8");
            }
            catch(PDOException $e)
            {
                die("Error: ".$e->getMessage());
            }
            return $link;

        }

    }