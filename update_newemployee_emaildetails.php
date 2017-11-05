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
   $emp_id= $_POST['emp_id'];
   $empid= $_POST['empid'];
     $name= $_POST['name'];

$emailid= $_POST['emailid'];


        


     mysql_query("UPDATE newemployee_emaildetails SET empid = '$empid' , name  = '$name' , 
emailid = '$emailid' WHERE emp_id = '$emp_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated emaildetails of employee $name ')")or die(mysql_error());
        header('location:newemployee_emaildetails.php');
       



?>


