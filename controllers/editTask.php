<?php

require "../db.php";

$id = $_POST['id'];
$taskName = $_POST['taskName'];
$taskDescription = $_POST['taskDescription'];

$sql = " UPDATE tareas SET taskName='$taskName',taskDescription='$taskDescription' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('location: ../index.php');
} else {
    echo "Error";
}

?>