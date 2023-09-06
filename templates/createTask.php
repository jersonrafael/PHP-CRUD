<?php 
include "head.php";
?>
<div class=''>
    <div class="my-4">
        <a href="../index.php" class='bg-red-600 text-white text-2xl py-2 px-4'>Back To Home</a>
        
        <div class='my-5'>
            <h2 class='text-center my-3 text-blue-600 text-2xl'>Create New Task</h2>
            <form action="../controllers/createTask.php" method="POST">
                <input type="text" placeholder="Task Name" name="taskName" class='p-2 text-center' autocomplete="off">
                <input type="text" placeholder="Task Description" name="taskDescription" class='p-2 text-center' autocomplete="off">
                <input type="submit" value="Add Task" class='py-2 px-5 text-center bg-blue-600'>
            </form>
        </div>
    </div>
</div>