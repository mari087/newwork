<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit IP Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
             <?php
  $query=mysql_query("select * from  wifidetails where wifi_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>

  
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatewifidetails.php">
                    <input type="hidden" name="_token" value="">
                    
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="ip_id" value="<?php echo $row['wifi_id']; ?>">
                        <label class="control-label">User:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="user" value="<?php echo $row['user']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">IP Address:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="ipaddress" value="<?php echo $row['ipaddress']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Department:</label>
                        
                           <div>
                        <select class="form-control select2" name="department"   style="width: 100%;" required>
				<?php
    $query = "SELECT * FROM `departments`";
    $result = mysql_query($query);
    while($row=mysql_fetch_array($result, MYSQL_ASSOC)){                                                 
       echo "<option value='".$row['departmentname']."'>".$row['departmentname']."</option>";
    }
?>
				
								
									
                  
                </select>
                </div>
                        
                    </div>	
                    
                    <div class="form-group">
                        <label class="control-label">Status:</label>
                       
                          <div>
                            <select class="form-control select2" name="status"   style="width: 100%;" required>
                            <option></option>
                            <option>Free</option>
                            <option>Used</option>
                            </select>
                        </div>
                        
                        
                    </div>
                    <?php
  $query=mysql_query("select * from  ipdetails where ip_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
                    <div class="form-group">
                        <label class="control-label">Remarks:</label>
                       
                           <textarea  class="form-control custom-control" name="remarks" rows="3"  style="resize:none"><?php echo $row['remarks']; ?></textarea> 
                        
                    </div>
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
