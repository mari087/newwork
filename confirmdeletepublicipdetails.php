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
   $publicip_id= $_POST['publicip_id'];
    

        


     mysql_query("delete from publicipdetails  WHERE publicip_id = '$publicip_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','Deleted ISP Public IP Information ')")or die(mysql_error());
        header('location:publicip.php');
       



?>

