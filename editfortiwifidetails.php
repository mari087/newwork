<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>Edit Forti Wifi Information</strong></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  fortiwifidetails where fortiwifi_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatefortiwifidetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="fortiwifi_id" value="<?php echo $row['fortiwifi_id']; ?>">
                        <label class="control-label">Device Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="devicename" value="<?php echo $row['devicename']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mac Address:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="macaddress" value="<?php echo $row['macaddress']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Serial Number:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="serialnumber" value="<?php echo $row['serialnumber']; ?>"></div>
                        
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label">HWID:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="hwid" value="<?php echo $row['hwid']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">PN:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="pn" value="<?php echo $row['pn']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Model:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="model" value="<?php echo $row['model']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">IP Address:</label>
                       
                           <div> <input type="text" class="form-control input-lg" name="ipaddress" value="<?php echo $row['ipaddress']; ?>"></div>
                        
                    </div>
                    
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