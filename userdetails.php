<div class="modal fade" id="newviewmodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View User Profile</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  users where user_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
 <div class="modal-body">
 
                    <div class="panel-body">
                    <ul class="list-unstyled">
                    <input type="hidden" class="form-control input-lg" name="user_id" value="<?php echo $row['user_id']; ?>">
                        <li>First Name<div class="text-success pull-right"><strong><?php echo $row['firstname']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li>Last Name<div class="text-success pull-right"><strong><?php echo $row['lastname']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li>Email ID<div class="text-success pull-right"><strong><?php echo $row['emailid']; ?></strong></div></li>
                        <div class="dropdown-divider"></div>
                        <li>Status<div class="text-success pull-right"><strong><?php echo $row['status']; ?></strong></div></li>
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

