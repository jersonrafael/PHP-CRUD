<?php
require "../db.php";
require "../templates/head.php";

$sql = "SELECT taskName,taskDescription FROM tareas";
$result = $conn->query($sql);

$row = $result->fetch_array(MYSQLI_ASSOC);


$id = $_GET['id'];
$taskName = $_GET['taskName'];
$taskDescription = $_GET['taskDescription'];

echo "
    <div class='my-5'>
        <a href='../index.php' class='bg-red-600 text-white text-2xl py-2 px-4'>Back To Home</a>
        <form action='../controllers/editTask.php' method='POST' class='my-5'>
            <input type='hidden' value=$id name='id'>
            <input type='text' value='$taskName' name='taskName' class='p-2 text-center' autocomplete='off'>
            <input type='text' value='$taskDescription' name='taskDescription' class='p-2 text-center' autocomplete='off'>
            <input type='submit' value='Edit' class='py-2 px-5 text-center bg-blue-600'>
        </form>
    </div>
";

?>