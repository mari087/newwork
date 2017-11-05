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
   $empid= $_POST['empid'];
     $name= $_POST['name'];
$emailid= $_POST['emailid'];




$query=mysql_query("select * from  newemployee_emaildetails where emailid='".$emailid."' and empid='".$empid."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO newemployee_emaildetails(empid,name,emailid) values('$empid','$name','$emailid')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New User $fname ')")or die(mysql_error());
        header('location:newemployee_emaildetails.php');
        }
        else
    {
      echo'The '.$emailid.' and '.$empid.'   is already present ';
    }


?>


