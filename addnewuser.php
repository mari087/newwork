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
   $fname= $_POST['fname'];
     $lname= $_POST['lname'];
$uname= $_POST['uname'];
$password= $_POST['password'];
$emailid= $_POST['emailid'];
$status= $_POST['status'];



$query=mysql_query("select * from users where username='".$uname."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO users(firstname,lastname,username,password,emailid,status) values('$fname','$lname','$uname','$password','$emailid','$status')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New User $fname ')")or die(mysql_error());
        header('location:users.php');
        }
        else
    {
      echo'The Username '.$uname.'   is already present ';
    }


?>

