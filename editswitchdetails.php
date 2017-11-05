<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title"><font color="#4e80d1"><strong>Edit Switch Details</strong></font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
               
               
            </div>
            
             <?php
  $query=mysql_query("select * from  switchdetails where switch_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updateswitchdetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="switch_id" value="<?php echo $row['switch_id']; ?>">
                        <label class="control-label">Switch Model:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="switchmodel" value="<?php echo $row['switchmodel']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ports:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="ports" value="<?php echo $row['ports']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Rack:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="rack" value="<?php echo $row['rack']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Remarks:</label>
                       
                           <textarea  class="form-control custom-control" name="remarks" rows="3"  style="resize:none"><?php echo $row['remarks']; ?></textarea> 
                        
                    </div>
                    
                    
                    
                   <br/>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
