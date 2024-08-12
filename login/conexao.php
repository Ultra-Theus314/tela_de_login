<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) 
  {
    echo "<br>";
    echo ("Falha na conexão: " . $con->connect_error);
  }
else
  {
    echo ("conectado");//conectado com sucesso !
  }
?>