
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Department Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
             <?php
  $query=mysql_query("select * from  departments where department_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatedepartment.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="department_id" value="<?php echo $row['department_id']; ?>">
                        <label class="control-label">Department Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="dname" value="<?php echo $row['departmentname']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Department Head:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="dhead" value="<?php echo $row['departmenthead']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">IP Used From:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="ipusedfrom" value="<?php echo $row['ipusedfrom']; ?>"></div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">IP Used Till:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="ipusedtill" value="<?php echo $row['ipusedtill']; ?>"></div>
                        
                    </div>
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