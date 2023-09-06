<?php
require "../db.php";

$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];

if (empty($taskName)) {
    // header('location: ../templates/createTask.php?message=No dejes el campo vacio');
    include "../templates/createTask.php";
} else {
    function createTask($taskName, $taskDescription)
    {
        global $conn;
        global $taskName;
        global $taskDescription;
        $sql = "INSERT INTO tareas (taskName,taskDescription) 
            VALUES('$taskName','$taskDescription')";
        if ($conn->query($sql) === TRUE) {
            header('Location: ../index.php?message=Producto Agregado');
        } else {
            echo "Error" . $conn->error;
        }
        $conn->close();
    }
    ;

    createTask($taskName, $taskDescription);
}
?>