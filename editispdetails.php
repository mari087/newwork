
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black"><b>Edit ISP Details</b></font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  ispdetails where isp_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updateispdetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="isp_id" value="<?php echo $row['isp_id']; ?>">
                        <label class="control-label">:Circuit ID</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="circuitid" value="<?php echo $row['circuitid']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">serviceid:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="serviceid" value="<?php echo $row['serviceid']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Account ID</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="accountid" value="<?php echo $row['accountid']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="location" value="<?php echo $row['location']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Public IP</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="publicip" value="<?php echo $row['publicip']; ?>" required>
                        </div>
                    </div>
	                    <div class="form-group">
                        <label class="control-label">Gate Way</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="gateway" value="<?php echo $row['gateway']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Contact Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="contact" value="<?php echo $row['contact']; ?>" required>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
 <a href="isp.php" class="btn btn-danger">Cancel</a>
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
