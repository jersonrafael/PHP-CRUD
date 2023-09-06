<ul>
    <?php
        include "db.php";
        $sql = "SELECT * FROM tareas";
        $result = $conn->query($sql);

        if ($result = $conn->query($sql)) {
            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                $taskId = $row['id'];
                $taskName = $row["taskName"];
                $taskDescription = $row['taskDescription'];
                echo "
                <li class='my-8 p-4 bg-blue-600'> <p>Task Name: <b>$taskName</b></p> 
                <p>Task Description: <b>$taskDescription</b></p>
                <a href='templates/editTask.php?id=$taskId&taskName=$taskName&taskDescription=$taskDescription' class='text-green-400'>Edit</a> 
                <a href='controllers/deleteTask.php?id=$taskId' class='text-red-600'>Mark as completed</a></li>
                ";
            }
            /* free result set */
            $result->free();
        }
    ?>
</ul>