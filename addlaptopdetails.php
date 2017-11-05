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
$laptopinfo= $_POST['laptopinfo'];
$hardwarespec= $_POST['hardwarespec'];
$date= $_POST['date'];
$vendor= $_POST['vendor'];
$status= $_POST['status'];





$query=mysql_query("select * from laptopdetails where user='".$user."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO laptopdetails(user,department,laptopinfo,hardwarespec,purchasedate,vendor,status) values('$user','$department','$laptopinfo','$hardwarespec','$date','$vendor','$status')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New laptop Details of $user')")or die(mysql_error());
        header('location:laptopinfo.php');
        }
        else
    {
      echo'The  '.$user.'   is already present ';
    }


?>





