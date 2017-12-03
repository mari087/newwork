<div class="modal fade" id="newviewmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong><font color="#504f4e">View Consultant Details</font></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  ispdetails where isp_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
 <div class="modal-body">
 
                    <div class="panel-body">
                    <ul class="list-unstyled">
                    
                        <li><strong><font color="black">Circuit ID</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['circuitid']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Service ID</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['serviceid']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Account ID</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['accountid']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Location</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['location']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Public IP</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['publicip']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li><strong><font color="black">Gateway</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['gateway']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                           <li><strong><font color="black">Contact Number</font></strong><div class="text-success pull-center"><font color="gray"><?php echo $row['contact']; ?></strong></div></li>
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




