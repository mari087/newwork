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
   $circuitid= $_POST['circuitid'];
     $serviceid= $_POST['serviceid'];
$accountid= $_POST['accountid'];
$location= $_POST['location'];
$publicip= $_POST['publicip'];
$gateway= $_POST['gateway'];
$contact= $_POST['contact'];





$query=mysql_query("select * from ispdetails where publicip='".$publicip."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO ispdetails(circuitid,serviceid,accountid,location,publicip,gateway,contact) values('$circuitid','$serviceid','$accountid','$location','$publicip','$gateway','$contact')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New ISP Details')")or die(mysql_error());
        header('location:isp.php');
        }
        else
    {
      echo'The  '.$publicip.'   is already present ';
    }


?>




