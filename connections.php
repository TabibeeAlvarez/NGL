<?php 

    function connections(){

        $host = "localhost";
        $username = "root";
        $password = "rada";
        $database = "ngl";
    
        $con = new mysqli($host, $username, $password, $database);
        
        if($con->connect_error){
            echo $con->connect_error;
        }
        else{
            return $con;
        }
    
    }

