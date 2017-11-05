<div class="modal fade" id="newviewmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong><font color="#504f4e">View Contact Details</font></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  contactdetails where contact_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
 <div class="modal-body">
 
                    <div class="panel-body">
                    <ul class="list-unstyled">
                    <input type="hidden" class="form-control input-lg" name="user_id" value="<?php echo $row['user_id']; ?>"></strong>
                        <li><strong><font color="gray">Name</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['name']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Designation</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['designation']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Email Id</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['emailid']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Local Ext</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['localext']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Department</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['department']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Mobile Number</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['mobilenumber']; ?></strong></div></li>
                        
                                                
                        
                        
                        
                           </ul>
                        
                    
                    
                    
                    
                   
                    
                    <div class="form-group">
                        <div>
                             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
 
                           
                        </div>
                    </div>
                
                </div>
            
           
          </div>
        </div>
      </div>
    </div>



