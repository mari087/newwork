<!DOCTYPE html>
<html lang="en">

<?php include('allheader.php') ?>
<?php include('session.php'); ?>
<?php $id=$_GET['id'];?>
<?php
  $query=mysql_query("select * from  contactdetails where contact_id='$id'")or die(mysql_error());
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
        <li class="breadcrumb-item active">Update Contact Information</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Edit Contact Information</div>
        <div class="card-body">
          <form role="form" class="form-horizontal" method="POST" action="updatecontactdetails.php">
                    <input type="hidden" name="_token" value="">
                    
                    <div class="form-group">
                    <div class="col-md-6">
                    <input type="hidden" class="form-control input-lg" name="contact_id" value="<?php echo $row['contact_id']; ?>">
                        <label class="control-label">Name:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="name" value="<?php echo $row['name']; ?>"></div>
                        
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Designation:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="designation" value="<?php echo $row['designation']; ?>"></div>
                        
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Email ID:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="emailid" value="<?php echo $row['emailid']; ?>"></div>
                        
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Local Ext:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="localext" value="<?php echo $row['localext']; ?>"></div>
                        
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Mobile Number:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="mobilenumber" value="<?php echo $row['mobilenumber']; ?>"></div>
                        
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Department:</label>
                        
                           <div>
                        <select class="form-control select2" name="department"   style="width: 100%;" required>
                        <option><?php echo $row['department']; ?></option>
				<?php
    $query = "SELECT * FROM `departments`";
    $result = mysql_query($query);
    while($row=mysql_fetch_array($result, MYSQL_ASSOC)){                                                 
       echo "<option value='".$row['departmentname']."'>".$row['departmentname']."</option>";
    }
?>
				
								
									
                  
                </select>
                </div>
                
                        
                    </div>
                    </div>	
                    
                    
                    
                   
                   
                    
                    
                    
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                             <a href="contacts.php" class="btn btn-danger">Cancel</a>

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
