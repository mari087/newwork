<div class="modal fade" id="newviewmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong><font color="#504f4e">View Nortel Details</font></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  mobiledetails where mobile_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
 <div class="modal-body">
 
                    <div class="panel-body">
                    <ul class="list-unstyled">
                    <input type="hidden" class="form-control input-lg" name="user_id" value="<?php echo $row['user_id']; ?>"></strong>
                        <li><strong><font color="gray">Make</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['make']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Serial Number</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['serialnumber']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">IMEI/Modal</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['imei']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">WIFI MAC Address</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['wifimacaddress']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Location</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['location']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Team</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['team']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Lead Name</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['leadname']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">User Name</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['username']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        
                                                
                        
                        
                        
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




