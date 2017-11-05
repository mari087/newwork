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
   $dname= $_POST['dname'];
     $dhead= $_POST['dhead'];
$ipusedfrom= $_POST['ipusedfrom'];
$ipusedtill= $_POST['ipusedtill'];
$remarks= $_POST['remarks'];




$query=mysql_query("select * from departments where departmentname='".$dname."'  ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
if($duplicate==0)
    {
     mysql_query("INSERT INTO departments(departmentname,departmenthead,ipusedfrom,ipusedtill,remarks) values('$dname','$dhead','$ipusedfrom','$ipusedtill','$remarks')")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Add New department  $dname ')")or die(mysql_error());
        header('location:departments.php');
        }
        else
    {
      echo'The Username '.$dname.'   is already present ';
    }


?>

