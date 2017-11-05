<div class="modal fade" id="deletemodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sure Delete User?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  users where user_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
  <form role="form" class="form-horizontal" method="POST" action="confirmdeleteuser.php">
          <div class="modal-body">Sure Want To Delete User <font color="red"><?php echo $row['firstname']; ?> ?</font></div>
          <div class="modal-footer">
          <input type="hidden" class="form-control input-lg" name="user_id" value="<?php echo $row['user_id']; ?>">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
 
                           
                        
                        </form>
            
           
          </div>
        </div>
      </div>
    </div>
