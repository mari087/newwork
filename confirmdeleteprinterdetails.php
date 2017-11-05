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
   $printer_id= $_POST['printer_id'];
   $printername= $_POST['printername'];    

        


     mysql_query("delete from printers  WHERE printer_id = '$printer_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Deleted WIFI Information of $printername ')")or die(mysql_error());
        header('location:printers.php');
       



?>


