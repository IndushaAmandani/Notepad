<?php

  
        $serverName = "localhost:3306";
        $userName = "root";
        $password = "1234";
        $database = "notepad";

        $db_conn = mysqli_connect($serverName,$userName,$password,$database);

        if(!$db_conn){
            die("Conection Failed:" . mysqli_connect_error());//$db_conn -> connection_error
        
         }
         //else{
        //     echo "Connected]]]";
        // }
       
      
      ?>