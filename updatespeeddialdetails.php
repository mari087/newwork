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
   $speeddial_id= $_POST['speeddial_id'];
   $name= $_POST['name'];
   $mobilenumber= $_POST['mobilenumber'];
   $speeddialnumber= $_POST['speeddialnumber'];
    
        


     mysql_query("UPDATE speeddialdetails SET name = '$name' , mobilenumber  = '$mobilenumber' , 
speeddialnumber = '$speeddialnumber' WHERE speeddial_id = '$speeddial_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Speed Dial Information of $name ')")or die(mysql_error());
        header('location:speeddial.php');
        
       



?>


