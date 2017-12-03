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
     $publicip= $_POST['publicip'];
$localip= $_POST['localip'];
$purpose= $_POST['purpose'];

        $status=$_POST['status'];

        


     mysql_query("UPDATE publicipdetails SET publicip = '$publicip' , localip  = '$localip' , 
purpose = '$purpose' , status = '$status' WHERE publicip_id = '$publicip_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated publicipdetails ')")or die(mysql_error());
        header('location:publicip.php');
       



?>


