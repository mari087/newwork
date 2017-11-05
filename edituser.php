
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title"><font color="black">Edit User Details</font></h1>
               
            </div>
            
             <?php
  $query=mysql_query("select * from  users where user_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updateuser.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <label class="control-label">First Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="fname" value="<?php echo $row['firstname']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last Name:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="lname" value="<?php echo $row['lastname']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email Id:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="emailid" value="<?php echo $row['emailid']; ?>"></div>
                        
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label">Password:</label>
                       
                           <div> <input type="password" class="form-control input-lg" name="password" value="<?php echo $row['password']; ?>"></div>
                        
                    </div>
                    <input type="hidden" class="form-control input-lg" name="status" value="administrator"><br/>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>