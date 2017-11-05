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
   $ip_id=$_POST['ip_id'];
   $user= $_POST['user'];
     $ipaddress= $_POST['ipaddress'];
$department= $_POST['department'];
$status= $_POST['status'];
$remarks= $_POST['remarks'];

        

        


     mysql_query("UPDATE ipdetails SET user = '$user' , ipaddress  = '$ipaddress' , 
department = '$department' , status = '$status' , remarks = '$remarks'  WHERE ip_id = '$ip_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated IP details ')")or die(mysql_error());
        header('location:allipdetails.php');
       



?>



