<?php
include('dbcon.php');
 include('session.php');

                                                $query= mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
                                                $row = mysql_fetch_array($query);
                                                $firstname=$row['firstname'];
                                                ?>
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

   include('dbcon.php');
   $department_id= $_POST['department_id'];
     $dname= $_POST['dname'];
$dhead= $_POST['dhead'];
$ipusedfrom= $_POST['ipusedfrom'];
$ipusedtill= $_POST['ipusedtill'];

        $remarks=$_POST['remarks'];

        


     mysql_query("UPDATE departments SET departmentname = '$dname' , departmenthead  = '$dhead' , 
ipusedfrom = '$ipusedfrom' , ipusedtill = '$ipusedtill' , remarks = '$remarks'  WHERE department_id = '$department_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Department details ')")or die(mysql_error());
        header('location:departments.php');
       



?>


