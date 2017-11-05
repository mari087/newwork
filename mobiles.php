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
            <h5 class="modal-title" id="exampleModalLabel">Add Gadgets Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            
            <div class="modal-body">
            
                <form role="form" method="POST" action="addmobiledetails.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Make</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="make" value="" required>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label">Serial Number</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" coloumns="5" name="serialnumber" style="resize:none"></textarea> 
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">IMEI/Model</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" name="imei" style="resize:none"></textarea> 
                        </div>
                    </div>
                    
     
                   <div class="form-group">
                        <label class="control-label">Wifi MacAddress</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="wifimacaddress" value="" required>
                        </div>
                    </div> 
	                    
                      <div class="form-group">
                        <label class="control-label">Location</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="location" value="" required>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="control-label">Lead Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="leadname" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Team</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="team" value="" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label">User name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="username" value="" >
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
        <li class="breadcrumb-item active"> Gadgets Details</li>
      </ol>
      <!-- Example DataTables Card-->
      
      <div class="card mb-3">
       
        <div class="card-body">
         &nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#ModalLoginForm" ><i class="fa fa-plus-circle" aria-hidden="true"></span></i> Add Mobile Info
       </button><br/><br/>
       
          <div class="table-responsive">
            <table class="table table-condensed" id="dataTable" width="100%" cellspacing="0">
              <thead bgcolor="#eeeeee">
                <tr>
                  <th><font color="#4d4d4d">Make</font></th>
                                            
                                           
                                            <th><font color="#4d4d4d">WiFI Mac Address</font></th>
                                             <th><font color="#4d4d4d">Location</font></th>
                                             
                                         	<th><font color="#4d4d4d">Lead Name</font></th>
                                         	<th><font color="#4d4d4d">User Name</font></th>
                                         	<th><font color="#4d4d4d">Action</font></th>
                </tr>
              </thead>
             
              <tbody>
                <?php
                                                 include('dbcon.php');
                                                                $result= mysql_query("select *from mobiledetails " ) or die (mysql_error());
                                                                while ($row= mysql_fetch_array ($result) ){
                                                                $id=$row['mobile_id'];
                                                                ?>
                <tr>
                  							<td><?php echo $row ['make']; ?></td>
                                            <td><?php echo $row ['wifimacaddress']; ?></td>
                                            <td><?php echo $row ['location']; ?></td>
                                            <td><?php echo $row ['leadname']; ?></td>
                                            <td><?php echo $row ['username']; ?></td>
                                            
                                            
                                           
                                           
                                            <td style="text-align:center;">
                                            
                                            <a href="editmobiledetails.php<?php echo '?id='.$id; ?>"> <font color="#424242"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                                           
                         <a href data-toggle="modal"  data-target="#deletemodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                         <a href data-toggle="modal"  data-target="#newviewmodal<?php echo $id; ?>"> <font color="#424242"><i class="fa fa-eye" aria-hidden="true" ></i></a>
                                            </td>
                                            
                                           <?php include ('deletemobiledetails.php');?> 
                                           <?php include ('viewmobiledetails.php');?> 
                                           
                                           
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
    

<!-- Include Date Range Picker -->
<script type="text/javascript" src="datepicker/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="datepicker/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
    
  </div>
</body>

</html>





