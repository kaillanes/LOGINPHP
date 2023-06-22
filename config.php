<?php

    function conectaBD(){
        $dbHost = 'Localhost';
        $dbUsername = 'root';
        $dbPassword = 'Thiagokaie02032019';
        $dbName = 'PPI';
    
        $con=new PDO("mysql:host=$dbHost;dbname=$dbName","$dbUsername","$dbPassword");
    
        return $con;
    
    }
    
?>