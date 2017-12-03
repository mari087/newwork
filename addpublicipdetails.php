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
   $publicip= $_POST['publicip'];
     $localip= $_POST['localip'];
$purpose= $_POST['purpose'];
$status= $_POST['status'];




$query=mysql_query("select * from publicipdetails where publicip='".$publicip."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO publicipdetails(publicip,localip,purpose,status) values('$publicip','$localip','$purpose','$status')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New IP Information of $publicip ')")or die(mysql_error());
        header('location:publicip.php');
        }
        else
    {
      echo'The  '.$publicip.'   is already present ';
    }


?>



