
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black"><b>Edit Public IP Information</b></font></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  publicipdetails where publicip_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatepublicipdetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="publicip_id" value="<?php echo $row['publicip_id']; ?>">
                        <label class="control-label">Public IP:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="publicip" value="<?php echo $row['publicip']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Local IP:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="localip" value="<?php echo $row['localip']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Purpose:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="purpose" value="<?php echo $row['purpose']; ?>"></div>
                        
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label">Status:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="status" value="<?php echo $row['status']; ?>"></div>
                        
                    </div>
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-info">Save Changes</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
