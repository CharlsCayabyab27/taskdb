<?php
include "db.php";
$id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id=". $id;
    $result = mysqli_query($conn, $query);

if(isset($_POST['submit'])){
    $task_name = mysqli_real_escape_string($conn, $_POST['task_name']);
    $task_description = mysqli_real_escape_string($conn, $_POST['task_description']);
    $task_due_date = mysqli_real_escape_string($conn, $_POST['task_due_date']);
    $task_status = mysqli_real_escape_string($conn, $_POST['task_status']);

   
                $query = "UPDATE `taskss`.`task` SET task_name='$task_name', task_description='$task_description', task_due_date='$task_due_date', task_status='$task_status'
                  WHERE id=". $id;
   
 if (mysqli_query($conn,$query)) {
    # code...
    
}
else{

    echo 'ERROR: '.mysqli_error($conn);
}
 }
echo "$task_name  $task_description  $task_due_date  $task_status";
 
?>

<html>

<body>
<form method ="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
                                        
                                        <div class="row">
                                           
                                            <div class="col-md-4 pl-12">
                                                <div class="form-group">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" name="task_name" value=" ">
                                                </div>
                                            </div>
                                       
                                            <div class="col-md-4 pl-12">
                                                <div class="form-group">
                                                    
                                                    <label>description</label>
                                                    <input type="text" class="form-control" name="task_description" value=" ">
                                                </div>
                                            </div>

                                            <div>
					                                <label>due date:</label>
					                                <input type="date" name="task_due_date">
			                                    	</div>

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                <select class="form-control" name = "task_status">
                                                    <option value="incomplete">incomplete</option>
				                                	<option value="in progress">in progress</option>
				                                	<option value="complete">Complete</option>
                                                    
                                                    </select>               
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                            
                                            
                                     
                                       
                                                </br>
                                        <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
</body>
</html>