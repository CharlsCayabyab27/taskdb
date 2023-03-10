<?php 
require "db.php";


$query = 'SELECT * FROM task';
        $result = mysqli_query($conn,$query);

    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
        mysqli_close($conn);


?>

<html>

<body><div style = "position:relative; left:470px; top:-2px;"><a class="nav-link" href="add.php">
                                        <button type ="submit" class ="btn btn-info btn-fill pull-right">add</button>
 </a> </div>
 
<table class="table table-hover" cellspacing="2" bgcolor="#000000">
                                        <thead  bgcolor="#ffffff">
                                            <th>id</th>
                                            <th>task name</th>
                                            <th>task decription</th>
                                            <th>task due date</th>
                                            <th>status</th>
                                            <th>action</th>
                                           
                                        
                                            

                                        </thead>
                                        <tbody  bgcolor="#ffffff">

                                            <?php foreach($tasks as $tsk): ?>
                                            <tr>
                                                <td><?php echo $tsk['id'];?></td>
                                                <td><?php echo $tsk['task_name'];?></td>
                                                <td><?php echo $tsk['task_description'];?></td>
                                                <td><?php echo $tsk['task_due_date'];?></td>
                                                <td><?php echo $tsk['task_status'];?></td>
                                                <td>
                                                <a href="delete.php?id= <?php echo $tsk['id'];   ?>">
                                                        <button type= "submit" class="btn btn-warning btn-fill pull-right" name = "delete" >delete
                                                       
                                                        </button>
                                                        <a href="edit.php?id= <?php echo $tsk['id'];   ?>">
                                                        <button type= "submit" class="btn btn-warning btn-fill pull-right">edit</button>
                                                       
                                                </td>


                                            </tr>
                                            <?php endforeach ?>
                                            
                                        </tbody>
                                    </table>
</body>
</html>
