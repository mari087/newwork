<div class="modal fade" id="deletemodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sure Delete Nortel Details?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  norteldetails where nortel_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
  <form role="form" class="form-horizontal" method="POST" action="confirmdeletenorteldetails.php">
          <div class="modal-body">Sure Want To Nortel Inforamation of user <font color="red"> <?php echo $row['user']; ?> ?</font></div>
          <div class="modal-footer">
          <input type="hidden" class="form-control input-lg" name="nortel_id" value="<?php echo $row['nortel_id']; ?>">
           <input type="hidden" class="form-control input-lg" name="user" value="<?php echo $row['user']; ?>">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
 
                           
                        
                        </form>
            
           
          </div>
        </div>
      </div>
    </div>




