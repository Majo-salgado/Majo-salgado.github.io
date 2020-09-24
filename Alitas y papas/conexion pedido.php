<?php
$mysqli = new mysqli ("localhost","root","alitas & papas");
 if(mysqli_connect_error()){
     echo'Conexion fallida:',mysqli_connect_error();
     exit();
 }
?>