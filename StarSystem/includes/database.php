<?php
    function Connect(){
        $server  = "localhost";
        $user     = "root";
        $pass     = "";
        $dbname   = "naprendszer";

        $con = mysqli_connect($server, $user, $pass, $dbname);
        if(!$con)
        {
            die("Az oldal nemtudott csatlakozni az adatbázishoz!");
        } 
        return $con;
    }
?>