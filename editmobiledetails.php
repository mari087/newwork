<!DOCTYPE html>
<html lang="en">

<?php include('allheader.php') ?>
<?php include('session.php'); ?>
<?php $id=$_GET['id'];?>
<?php
  $query=mysql_query("select * from  mobiledetails where mobile_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('allnavigation.php')?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Change Mobile Information Information</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Edit Mobile Information</div>
        <div class="card-body">
          <form role="form" class="form-horizontal" method="POST" action="updatemobiledetails.php">
                    <input type="hidden" name="_token" value="">
                    
                    <div class="form-group">
                    <div class="col-md-6">
                    <input type="hidden" class="form-control input-lg" name="mobile_id" value="<?php echo $row['mobile_id']; ?>">
                        <label class="control-label">Make:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="make" value="<?php echo $row['make']; ?>"></div>
                        
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Serial Number</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" coloumns="5" name="serialnumber"  style="resize:none"><?php echo $row['serialnumber']; ?></textarea> 
                        </div>
                    </div>
                    </div>
                   <div class="form-group">
                   <div class="col-md-6">
                        <label class="control-label">IMEI/Model</label>
                        <div>
                            <textarea class="form-control custom-control" rows="3" name="imei"  style="resize:none"><?php echo $row['imei']; ?></textarea> 
                        </div>
                    </div></div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Wifi MacAddress</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="wifimacaddress" value="<?php echo $row['wifimacaddress']; ?>" required>
                        </div>
                    </div> </div>
	                    
                      <div class="form-group">
                      <div class="col-md-6">
                        <label class="control-label">Location</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="location" value="<?php echo $row['location']; ?>" required>
                        </div>
                    </div></div>
                    
                     <div class="form-group">
                     <div class="col-md-6">
                        <label class="control-label">Lead Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="leadname" value="<?php echo $row['leadname']; ?>" required>
                        </div>
                    </div></div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Team</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="team" value="<?php echo $row['team']; ?>" required>
                        </div>
                    </div>
                    </div>
                     <div class="form-group">
                     <div class="col-md-6">
                        <label class="control-label">User name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="username" value="<?php echo $row['username']; ?>" >
                        </div>
                    </div>
                    </div>
                    
                    
                    
                   
                   
                    
                    
                    
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                             <a href="mobiles.php" class="btn btn-danger">Cancel</a>

<script>
function goBack() {
    window.history.back(-1);
}
</script> 
 
                          </div> 
                        </div>
                    </div>
                </form>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
      
    </div>
    
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

