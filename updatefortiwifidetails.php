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
   $fortiwifi_id=$_POST['fortiwifi_id'];
   $devicename= $_POST['devicename'];
   $macaddress= $_POST['macaddress'];
   $serialnumber= $_POST['serialnumber'];
   $hwid= $_POST['hwid'];
   $pn= $_POST['pn'];
   $model= $_POST['model'];
   $ipaddress= $_POST['ipaddress'];

        

        


     mysql_query("UPDATE fortiwifidetails SET devicename = '$devicename' ,  macaddress  = '$macaddress' ,
serialnumber = '$serialnumber' , hwid = '$hwid' , pn = '$pn' , model = '$model' , ipaddress = '$ipaddress'  WHERE fortiwifi_id = '$fortiwifi_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Forti Wifi details $devicename ')")or die(mysql_error());
        header('location:fortiwifi.php');
       



?>






