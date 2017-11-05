<div class="modal fade" id="deletemodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sure Delete Contact Details?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  contactdetails where contact_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
  <form role="form" class="form-horizontal" method="POST" action="confirmdeletecontactdetails.php">
          <div class="modal-body">Sure Want To Contact Inforamation of  <font color="red"> <?php echo $row['name']; ?> ?</font></div>
          <div class="modal-footer">
          <input type="hidden" class="form-control input-lg" name="contact_id" value="<?php echo $row['contact_id']; ?>">
           <input type="hidden" class="form-control input-lg" name="name" value="<?php echo $row['name']; ?>">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
 
                           
                        
                        </form>
            
           
          </div>
        </div>
      </div>
    </div>





