<?php
 define('HOST','localhost');
 define('USER','phpmyadmin');
 define('PASS','Admin@123');
 define('BASE','cadastro');

 $conn = new MySQLi(HOST,USER,PASS,BASE);
 

 if (!$conn) {
    die("Connection failed:" . mysqli_connect_erro());

 }
 else {
    //echo "Connected successfully";
 }
 
?>