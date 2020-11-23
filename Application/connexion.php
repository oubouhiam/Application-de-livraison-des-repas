<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'foodontime';
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
        ?>