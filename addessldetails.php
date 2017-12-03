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
   $placeofdevice= $_POST['placeofdevice'];
     $serialnumber= $_POST['serialnumber'];
$devicetype= $_POST['devicetype'];
$location= $_POST['location'];
$ipaddress= $_POST['ipaddress'];
$remarks= $_POST['remarks'];





$query=mysql_query("select * from essldetails where ipaddress='".$ipaddress."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO essldetails(placeofdevice,serialnumber,devicetype,location,ipaddress,remarks) values('$placeofdevice','$serialnumber','$devicetype','$location','$ipaddress','$remarks')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New ESSL Device Details ')")or die(mysql_error());
        header('location:essl.php');
        }
        else
    {
      echo'The  '.$ipaddress.'   is already present ';
    }


?>





