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
   $name= $_POST['name'];
     $designation= $_POST['designation'];
$emailid= $_POST['emailid'];
$localext= $_POST['localext'];
$mobilenumber= $_POST['mobilenumber'];
$department= $_POST['department'];




$query=mysql_query("select * from contactdetails where emailid='".$emailid."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO contactdetails(name,designation,emailid,localext,mobilenumber,department) values('$name','$designation','$emailid','$localext','$mobilenumber','$department')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New Contact Details of $name')")or die(mysql_error());
        header('location:contacts.php');
        }
        else
    {
      echo'The  '.$emailid.'   is already present ';
    }


?>




