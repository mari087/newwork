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
   $isp_id= $_POST['isp_id'];
   $circuitid= $_POST['circuitid'];
   $serviceid= $_POST['serviceid'];
   $accountid= $_POST['accountid'];
   $location= $_POST['location'];
   $publicip= $_POST['publicip'];
   $gateway= $_POST['gateway'];
   $contact= $_POST['contact'];

        


     mysql_query("UPDATE ispdetails SET circuitid = '$circuitid' , serviceid  = '$serviceid' , 
accountid = '$accountid' ,  location = '$location' , publicip = '$publicip' , gateway = '$gateway' ,  contact = '$contact' WHERE isp_id = '$isp_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated ISP information ')")or die(mysql_error());
        header('location:isp.php');
       



?>


