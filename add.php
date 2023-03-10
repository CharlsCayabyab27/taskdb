<?php

echo "test";

?>

<html>

<body>
<form method ="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
                                        
                                        <div class="row">
                                           
                                            <div class="col-md-4 pl-12">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;  ?>">
                                                </div>
                                            </div>
                                       
                                            <div class="col-md-4 pl-12">
                                                <div class="form-group">
                                                    
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;  ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                <select class="form-control" name = "office">
                                                    <option>select....</option>
                                                    <?php  
                                                    $query = "SELECT id, name FROM office";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        if ($row['id']==$office_id) {
                                                            echo "<option value=" .$row['id']."selected>". $row['name'].'</option>'; # code...
                                                        }else {
                                                            echo "<option value=" .$row['id'].">". $row['name'].'</option>';    # code...
                                                        }
                                                        
                                                        # code...
                                                    }

                                                    ?> 
                                                    </select>               
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12 >
                                                <div class="form-group">
                                                    <label>Address / Building</label>
                                                    <input type="text" class="form-control" name = "address" value="<?php echo $address;  ?>">
                                                </div>
                                            </div>
                                           
                                        </div>
                                            
                                            
                                     
                                       
                                                </br>
                                        <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
</body>
</html>