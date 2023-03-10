<?php

define('ROOT_URL', 'http://localhost/activity/');
define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'task');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_errno())
echo "shesh moments";

else echo "ok";


$query = 'SELECT * FROM task';
        $result = mysqli_query($conn,$query);

    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
        mysqli_close($conn);


?>

<html>

<body>
<table class="table table-hover">
                                        <thead>
                                            <th>id</th>
                                            <th>task name</th>
                                            <th>task decription</th>
                                            <th>task due date</th>
                                            <th>status</th>
                                            <th>action</th>
                                            <th>  <a class="nav-link" href="add.php">
                                        <button type ="submit" class ="btn btn-info btn-fill pull-right">add</button>
 </a>  </th>
                                        
                                            

                                        </thead>
                                        <tbody>

                                            <?php foreach($tasks as $tsk): ?>
                                            <tr>
                                                <td><?php echo $tsk['idtask'];?></td>
                                                <td><?php echo $tsk['idtask'];?></td>
                                                <td><?php echo $tsk['task_description'];?></td>
                                                <td><?php echo $tsk['task_due'];?></td>
                                                <td><?php echo $tsk['task_status'];?></td>
                                                <td>

                                                        <button type= "submit" class="btn btn-warning btn-fill pull-right">delete</button>
                                                       
                                                </td>

                                                <td> <a href="Recordapp.php?id= <?php echo $tsk['idtask'];   ?>">
                                                        <button type= "submit" class="btn btn-warning btn-fill pull-right">edit</button></td>
                                              


                                            </tr>
                                            <?php endforeach ?>
                                            
                                        </tbody>
                                    </table>
</body>
</html>
