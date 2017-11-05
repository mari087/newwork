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
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Add User</h1>
               
            </div>
            
            <div class="modal-body">
            
                <form role="form" method="POST" action="addnewuser.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">First Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="fname" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="lname" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">User Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="uname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label">emailid</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="emailid">
                        </div>
                    </div>
                    <input type="hidden" class="form-control input-lg" name="status" value="administrator">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
 
                           
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
        <li class="breadcrumb-item active">User Details</li>
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
                  <th><font color="#4d4d4d">User Name</font></th>
                                            <th><font color="#4d4d4d">First Name</font></th>
                                            <th><font color="#4d4d4d">Last Name</font></th>
                                            <th><font color="#4d4d4d">Emailid</font></th>
                                            
                                            <th><font color="#4d4d4d">Action</font></th>
                </tr>
              </thead>
             
              <tbody>
                <?php
                                                 include('dbcon.php');
                                                                $result= mysql_query("select *from users" ) or die (mysql_error());
                                                                while ($row= mysql_fetch_array ($result) ){
                                                                $id=$row['user_id'];
                                                                ?>
                <tr>
                  <td><?php echo $row ['username']; ?></td>
                                            <td><?php echo $row ['firstname']; ?></td>
                                            <td><?php echo $row ['lastname']; ?></td>
                                            <td><?php echo $row ['emailid']; ?></td>
                                           
                                            
                                            <td style="text-align:center;">
                                            
                                            <a href data-toggle="modal"  data-target="#editmodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                                           
                         <a href data-toggle="modal"  data-target="#deletemodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                         <a href data-toggle="modal"  data-target="#newviewmodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-eye" aria-hidden="true" ></i></a>
                                            </td>
                                           <?php include ('edituser.php');?> 
                                           <?php include ('deleteuser.php');?> 
                                           <?php include ('userdetails.php');?> 
                                           
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
