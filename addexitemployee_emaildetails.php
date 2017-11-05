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
   $status= $_POST['status'];
     $currentstatus= $_POST['currentstatus'];
$emailid= $_POST['emailid'];




$query=mysql_query("select * from  exitemployee_emaildetails where emailid='".$emailid."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO exitemployee_emaildetails(emailid,status,currentstatus) values('$emailid','$status','$currentstatus')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add exit Employee Email Details  ')")or die(mysql_error());
        header('location:exitemployee_emaildetails.php');
        }
        else
    {
      echo'The '.$emailid.'   is already present ';
    }


?>



