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
   $make= $_POST['make'];
     $serialnumber= $_POST['serialnumber'];
$imei= $_POST['imei'];
$wifimacaddress= $_POST['wifimacaddress'];
$location= $_POST['location'];
$leadname= $_POST['leadname'];
$team= $_POST['team'];
$username= $_POST['username'];





$query=mysql_query("select * from mobiledetails where wifimacaddress='".$wifimacaddress."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO mobiledetails(make,serialnumber,imei,wifimacaddress,location,leadname,team,username) values('$make','$serialnumber','$imei','$wifimacaddress','$location','$leadname','$team','$username')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New mobile Details of $department ')")or die(mysql_error());
        header('location:mobiles.php');
        }
        else
    {
      echo'The  '.$wifimacaddress.'   is already present ';
    }


?>





