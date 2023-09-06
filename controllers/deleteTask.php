<?php
include "../db.php";

$taskId = $_GET['id'];

$sql = "DELETE FROM tareas WHERE id = $taskId";

if ($conn->query($sql) === TRUE) {
    header('location: ../index.php?message=Producto Eliminado');
}else{
    echo "Error";
}
?>