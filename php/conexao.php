<?php

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $bd = "rodolfo_sistema";
        
        $pdo = new PDO("mysql:host=" .$hostname. ";dbname=" .$bd, $username, $password);
