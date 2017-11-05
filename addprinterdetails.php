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
$printername= $_POST['printername'];
$ipaddress= $_POST['ipaddress'];




$query=mysql_query("select * from printers where ipaddress='".$ipaddress."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO printers(user,department,printername,ipaddress) values('$user','$department','$printername','$ipaddress')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Printer $printername ')")or die(mysql_error());
        header('location:printers.php');
        }
        else
    {
      echo'The IP Address  '.$ipaddress.' of Printer '.$printername.'   is already present ';
    }


?>


