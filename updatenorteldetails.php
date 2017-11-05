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
   $nortel_id=$_POST['nortel_id'];
   $user= $_POST['user'];
     $ipaddress= $_POST['ipaddress'];
     $macaddress= $_POST['macaddress'];
$department= $_POST['department'];
$location= $_POST['location'];
$type= $_POST['type'];
$nortel_extension= $_POST['nortel_extension'];
$remarks= $_POST['remarks'];

        

        


     mysql_query("UPDATE norteldetails SET user = '$user' , ipaddress  = '$ipaddress' , macaddress  = '$macaddress' ,
department = '$department' , type = '$type' , nortel_extension = '$nortel_extension' , location = '$location' , remarks = '$remarks'  WHERE nortel_id = '$nortel_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Nortel details ')")or die(mysql_error());
        header('location:nortels.php');
       



?>





