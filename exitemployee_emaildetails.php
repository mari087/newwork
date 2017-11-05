<!DOCTYPE html>
<html lang="en">

<?php include('allheader.php') ?>
<?php include('session.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('allnavigation.php')?>
  <div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Exit Employee Email Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
            <div class="modal-body">
            
                <form role="form" method="POST" action="addexitemployee_emaildetails.php">
                    <input type="hidden" name="_token" value="">
                    
                    
                    <div class="form-group">
                        <label class="control-label">Email ID</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="emailid">
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="control-label">Status</label>
                        <div>
                            <select class="form-control select2" name="status"   style="width: 100%;" required>
                            <option></option>
                            <option>Deleted</option>
                            <option>Not_Deleted</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Current Status</label>
                        <div>
                            <select class="form-control select2" name="currentstatus"   style="width: 100%;" required>
                            <option></option>
                            <option>Deleted</option>
                            <option>Ust_password_reset</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Exit Employee Mail ID Details</li>
      </ol>
      <!-- Example DataTables Card-->
      
      <div class="card mb-3">
       
        <div class="card-body">
         &nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#ModalLoginForm" ><i class="fa fa-plus-circle" aria-hidden="true"></span></i> Add Users
       </button><br/><br/>
       
          <div class="table-responsive">
            <table class="table table-condensed" id="dataTable" width="100%" cellspacing="0">
              <thead bgcolor="#eeeeee">
                <tr>
                  <th><font color="#4d4d4d">Email Id</font></th>
                                            <th><font color="#4d4d4d">Status</font></th>
                                            <th><font color="#4d4d4d">Current Status</font></th>
                                            <th><font color="#4d4d4d">Action</font></th>
                                            
                </tr>
              </thead>
             
              <tbody>
                <?php
                                                 include('dbcon.php');
                                                                $result= mysql_query("select *from exitemployee_emaildetails" ) or die (mysql_error());
                                                                while ($row= mysql_fetch_array ($result) ){
                                                                $id=$row['emp_id'];
                                                                ?>
                <tr>
                  <td><?php echo $row ['emailid']; ?></td>
                                            <td><?php echo $row ['status']; ?></td>
                                            <td><?php echo $row ['currentstatus']; ?></td>
                                            
                                           
                                            
                                            <td style="text-align:center;">
                                            
                                            <a href data-toggle="modal"  data-target="#editmodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                                           
                         <a href data-toggle="modal"  data-target="#deletemodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                         
                                            </td>
                                           
<div id="editmodal<?php echo $id; ?>" class="modal fade">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit New Employee Email Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
             <?php
  $query=mysql_query("select * from  exitemployee_emaildetails where emp_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
            <div class="modal-body">
            
                <form role="form" class="form-horizontal" method="POST" action="update_exitemployee_emaildetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                    <input type="hidden" class="form-control input-lg" name="emp_id" value="<?php echo $row['emp_id']; ?>">
                        <label class="control-label">Email ID:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="emailid" value="<?php echo $row['emailid']; ?>"></div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <div>
                            <select class="form-control select2" name="status"   style="width: 100%;" required>
                            <option><?php echo $row['status'];?></option>
                            <option>Deleted</option>
                            <option>Not_Deleted</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Current Status</label>
                        <div>
                            <select class="form-control select2" name="currentstatus"   style="width: 100%;" required>
                            <option><?php echo $row['currentstatus'];?></option>
                            <option>Deleted</option>
                            <option>Ust_password_reset</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
 
                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> 

<div class="modal fade" id="deletemodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Exit Employee Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  exitemployee_emaildetails where emp_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
  <form role="form" class="form-horizontal" method="POST" action="delete_exitemployee_emaildetails.php">
          <div class="modal-body">Sure Want To Delete Mailid<font color="#054da9"><?php echo $row['emailid']; ?> ?</font></div>
          <div class="modal-footer">
          <input type="hidden" class="form-control input-lg" name="emp_id" value="<?php echo $row['emp_id']; ?>">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
 
                           
                        
                        </form>
            
           
          </div>
        </div>
      </div>
    </div>
                                           
                                           
                                           <div class="modal fade" id="deletemodal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sure Delete EMPID?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
  $query=mysql_query("select * from  newemployee_emaildetails where emp_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
  <form role="form" class="form-horizontal" method="POST" action="delete_newemployee_emaildetails.php">
          <div class="modal-body">Sure Want To Delete name <font color="#054da9"><?php echo $row['name']; ?> ?</font></div>
          <div class="modal-footer">
          <input type="hidden" class="form-control input-lg" name="emp_id" value="<?php echo $row['emp_id']; ?>">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
 
                           
                        
                        </form>
            
           
          </div>
        </div>
      </div>
    </div>
                                           
                                           
                                           
                </tr>
                <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>


