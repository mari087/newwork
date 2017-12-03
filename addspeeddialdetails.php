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
     $mobilenumber= $_POST['mobilenumber'];
$speeddialnumber= $_POST['speeddialnumber'];





$query=mysql_query("select * from speeddialdetails where mobilenumber='".$mobilenumber."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO speeddialdetails(name,mobilenumber,speeddialnumber) values('$name','$mobilenumber','$speeddialnumber')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Added Speed Dial Information of $name ')")or die(mysql_error());
        header('location:speeddial.php');
        }
        else
    {
      echo'The  '.$mobilenumber.'   is already present ';
    }


?>



