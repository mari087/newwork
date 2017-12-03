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
            <h5 class="modal-title" id="exampleModalLabel">Add ESSL Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
            <div class="modal-body">
            
                <form role="form" method="POST" action="addessldetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Place Of Device</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="placeofdevice" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Serial Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="serialnumber" value="" required>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="control-label">Device Type</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="devicetype" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Location</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="location" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">IP Address</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="ipaddress" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Remarks</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="remarks" value="" required>
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
        <li class="breadcrumb-item active">ESSL Details</li>
      </ol>
      <!-- Example DataTables Card-->
      
      <div class="card mb-3">
       
        <div class="card-body">
         &nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#ModalLoginForm" ><i class="fa fa-plus-circle" aria-hidden="true"></span></i> Add ESSL Info
       </button><br/><br/>
       
          <div class="table-responsive">
            <table class="table table-condensed" id="dataTable" width="100%" cellspacing="0">
              <thead bgcolor="#eeeeee">
                <tr>
                  <th><font color="#4d4d4d">Place Of Device</font></th>
                                            <th><font color="#4d4d4d">Serial Number</font></th>
                                            <th><font color="#4d4d4d">IP Address</font></th>
                                            <th><font color="#4d4d4d">Device Type</font></th>
                                            <th><font color="#4d4d4d">Device Location</font></th>
                                            <th><font color="#4d4d4d">Action</font></th>
                                             
                </tr>
              </thead>
             
              <tbody>
                <?php
                                                 include('dbcon.php');
                                                                $result= mysql_query("select *from essldetails " ) or die (mysql_error());
                                                                while ($row= mysql_fetch_array ($result) ){
                                                                $id=$row['essl_id'];
                                                                ?>
                <tr>
                  							<td><?php echo $row ['placeofdevice']; ?></td>
                                            <td><?php echo $row ['serialnumber']; ?></td>
                                            <td><?php echo $row ['ipaddress']; ?></td>
                                            <td><?php echo $row ['devicetype']; ?></td>
                                            <td><?php echo $row ['location']; ?></td>
                                            
                                            
                                           
                                           
                                            <td style="text-align:center;">
                                            
                                            <a href data-toggle="modal"  data-target="#editmodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                                           
                         <a href data-toggle="modal"  data-target="#deletemodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                         
                                            </td>
                                            
                                           <?php include ('deletenorteldetails.php');?> 
                                           <?php include ('viewnorteldetails.php');?> 
                                           
                                           
                </tr>
                <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
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





