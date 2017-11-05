<!DOCTYPE html>
<html lang="en">

<?php include('allheader.php') ?>
<?php include('session.php'); ?>
<?php $id=$_GET['id'];?>
<?php
  $query=mysql_query("select * from  laptopdetails where laptop_id='$id'")or die(mysql_error());
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
        <li class="breadcrumb-item active">Update Laptop Information</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Edit Laptop Information</div>
        <div class="card-body">
          <form role="form" class="form-horizontal" method="POST" action="updatelaptopdetails.php">
                    <input type="hidden" name="_token" value="">
                    
                    <div class="form-group">
                    <div class="col-md-6">
                    <input type="hidden" class="form-control input-lg" name="laptop_id" value="<?php echo $row['laptop_id']; ?>">
                        <label class="control-label">User:</label>
                        
                            <div ><input type="text" class="form-control input-lg" name="user" value="<?php echo $row['user']; ?>"></div>
                        
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
                    <?php
  $query=mysql_query("select * from  laptopdetails where laptop_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);

  ?>
                    
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Laptop Info:</label>
                       
                           <textarea  class="form-control custom-control" name="laptopinfo" rows="3"  style="resize:none"><?php echo $row['laptopinfo']; ?></textarea> 
                        
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Hardware Specification:</label>
                       
                           <textarea  class="form-control custom-control" name="hardwarespec" rows="3"  style="resize:none"><?php echo $row['hardwarespec']; ?></textarea> 
                        
                    </div>
                    </div>
                    	
                    <div class="form-group ">
      <label class="control-label ">
      PurchaseDate
       
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text" />
       </div>
      </div>
     </div>
                    
                    
                   
                   <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label">Vendor:</label>
                        
                            <div><input type="text" class="form-control input-lg" name="vendor" value="<?php echo $row['vendor']; ?>"></div>
                        
                    </div>
                    </div> 
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Status:</label>
                       
                           <textarea  class="form-control custom-control" name="status" rows="3"  style="resize:none"><?php echo $row['status']; ?></textarea> 
                        
                    </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                             <a href="laptopinfo.php" class="btn btn-danger">Cancel</a>

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

