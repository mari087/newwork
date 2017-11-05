<div class="modal fade" id="newviewmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong><font color="black">View WIFI Details</font></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  wifidetails where wifi_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
 <div class="modal-body">
 
                    <div class="panel-body">
                    <ul class="list-unstyled">
                    
                        <li><strong><font color="gray">User</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['user']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">IP Address</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['ipaddress']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Mac Address</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['macaddress']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Department</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['department']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Status</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['status']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="gray">Remarks</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['remarks']; ?></strong></div></li>
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

