<?php
include('dbcon.php');
 include('session.php');

                                                $query= mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
                                                $row = mysql_fetch_array($query);
                                                $firstname=$row['firstname'];
                                                $username=$row['username'];
                                                
                                                ?>

<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

   include('dbcon.php');
   $user= $_POST['user'];
     $department= $_POST['department'];
$ipaddress= $_POST['ipaddress'];
$macaddress= $_POST['macaddress'];
$status= $_POST['status'];
$remarks= $_POST['remarks'];




$query=mysql_query("select * from wifidetails where ipaddress='".$ipaddress."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO wifidetails(user,ipaddress,macaddress,department,status,remarks) values('$user','$ipaddress','$macaddress','$department','$status','$remarks')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New WiFI Details $ipaddress ')")or die(mysql_error());
        header('location:wifi.php');
        }
        else
    {
      echo'The  '.$ipaddress.'   is already present ';
    }


?>



