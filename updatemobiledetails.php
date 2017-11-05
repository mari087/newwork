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
   $mobile_id= $_POST['mobile_id'];
  $make= $_POST['make'];
     $serialnumber= $_POST['serialnumber'];
$imei= $_POST['imei'];
$wifimacaddress= $_POST['wifimacaddress'];
$location= $_POST['location'];
$leadname= $_POST['leadname'];
$team= $_POST['team'];
$username= $_POST['username'];

        

        


     mysql_query("UPDATE mobiledetails SET make = '$make' , serialnumber  = '$serialnumber' , imei  = '$imei' ,
wifimacaddress = '$wifimacaddress' , location = '$location' , leadname = '$leadname' , team = '$team' , username = '$username'  WHERE mobile_id = '$mobile_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Gadgets details ')")or die(mysql_error());
        header('location:mobiles.php');
       



?>






