<?php
require "../db.php";

function deleteTask($taskName){
    global $conn;
    $sql = "DELETE FROM tareas WHERE taskName = '$taskName'";

if ($conn->query($sql) === TRUE){
    echo "Tarea Eliminada";
}else{
    echo "Error al insertar" . $conn->error;
}

$conn->close();
};


?>