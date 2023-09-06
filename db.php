<?php
// CONECTION DATA
$servername = "localhost";
$dbname ="CRUD";
$username = "root";
$password = "";

// CONECT
$conn = new mysqli($servername,$username,$password,$dbname);

// CHECK CONECTION
if ($conn->connect_error){
    die("Conexion Fallida" . $conn->connection_error);
}

?>