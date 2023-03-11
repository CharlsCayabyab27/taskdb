<?php 
require "db.php";


$query = 'SELECT * FROM task';


        $result = mysqli_query($conn,$query);
        $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
   

    # code...
if (isset($_POST['all'])) {
    $query = 'SELECT * FROM task';
    $result = mysqli_query($conn,$query);
    
        echo "hell11o";    # code...
    }
if (isset($_POST['inc'])) {
    $query = 'SELECT * FROM task WHERE task_status = '.'in complete';
    $result = mysqli_query($conn,$query);
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    # code...echo
    echo "hello";
}


if (isset($_POST['inp'])) {
    echo "hello3";# code...
}

if (isset($_POST['com'])) {
    echo "hello2";    # code...
}

   
    mysqli_free_result($result);
        mysqli_close($conn);


?>

<html>

<body>
    



<div style = "position:relative; left:470px; top:-2px;"><a class="nav-link" href="add.php">
                                        <button type ="submit" class ="btn btn-info btn-fill pull-right">add</button>
 </a> </div>
 
  
                                               
                                            
<table class="table table-hover" cellspacing="2" bgcolor="#000000">
                                        <thead  bgcolor="#ffffff">
                                            <th>id</th>
                                            <th>task name</th>
                                            <th>task decription</th>
                                            <th>task due date</th>
                                            <th>status
                                            </th>
                                            
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
                                                <button type= "submit" class="btn btn-warning btn-fill pull-right" >delete</button>
                                                                                        
                                            
                                                <a href="edit.php?id= <?php echo $tsk['id'];   ?>">
                                                        <button type= "submit" class="btn btn-warning btn-fill pull-right">edit</button>
                                                       
                                                </td>
                                                <td>
                                            
                                                        
                                                </td>


                                            </tr>
                                            <?php endforeach ?>
                                            
                                        </tbody>
                                    </table>

                                    <form style = "position:relative; left:0px; top:2px;" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
 FILTER
                                                    <button type ="submit" name = "all" class ="btn btn-info btn-fill pull-right">show all</button>
                                                    <button type ="submit" name = "inc" class ="btn btn-info btn-fill pull-right">show incomplete</button>
                                                    <button type ="submit" name = "inp" class ="btn btn-info btn-fill pull-right">show orogress</button>
                                                    <button type ="submit" name = "com" class ="btn btn-info btn-fill pull-right">complete</button>
</form>         
</body>
</html>
