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
   $devicename= $_POST['devicename'];
     $macaddress= $_POST['macaddress'];
$serialnumber= $_POST['serialnumber'];
$hwid= $_POST['hwid'];
$pn= $_POST['pn'];
$model= $_POST['model'];
$ipaddress= $_POST['ipaddress'];





$query=mysql_query("select * from fortiwifidetails where ipaddress='".$ipaddress."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO fortiwifidetails(devicename,macaddress,serialnumber,hwid,pn,model,ipaddress) values('$devicename','$macaddress','$serialnumber','$hwid','$pn','$model','$ipaddress')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New fori wifi Details of $devicename ')")or die(mysql_error());
        header('location:fortiwifi.php');
        }
        else
    {
      echo'The  '.$ipaddress.'   is already present ';
    }


?>





