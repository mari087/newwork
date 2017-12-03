
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><font color="black"><b>Edit User Details</font></h1></b></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                
               
            </div>
            
             <?php
  $query=mysql_query("select * from  speeddialdetails where speeddial_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="updatespeeddialdetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="speeddial_id" value="<?php echo $row['speeddial_id']; ?>">
                        <label class="control-label">Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="name" value="<?php echo $row['name']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mobile Number:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="mobilenumber" value="<?php echo $row['mobilenumber']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Speed Dial Number:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="speeddialnumber" value="<?php echo $row['speeddialnumber']; ?>"></div>
                        
                    </div>
                    
                    
                    
                  
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-info">Submit</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
