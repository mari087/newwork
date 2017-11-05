<?php
include('dbcon.php');
 include('session.php');

                                                $query= mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
                                                $row = mysql_fetch_array($query);
                                                $firstname=$row['firstname'];
                                                ?>
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

   include('dbcon.php');
   $user_id= $_POST['user_id'];
     $fname= $_POST['fname'];
$lname= $_POST['lname'];
$emailid= $_POST['emailid'];

        $password=$_POST['password'];

        


     mysql_query("UPDATE users SET firstname = '$fname' , lastname  = '$lname' , 
password = '$password' , emailid = '$emailid' WHERE user_id = '$user_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated userdetails ')")or die(mysql_error());
        header('location:users.php');
       



?>

