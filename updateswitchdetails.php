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
   $switch_id=$_POST['switch_id'];
   $switchmodel= $_POST['switchmodel'];
   $ports= $_POST['ports'];
   $rack= $_POST['rack'];
   $remarks= $_POST['remarks'];

        

        


     mysql_query("UPDATE switchdetails SET switchmodel = '$switchmodel' , ports  = '$ports' , rack  = '$rack' ,
remarks = '$remarks'  WHERE switch_id = '$switch_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Switch details ')")or die(mysql_error());
        header('location:switches.php');
       



?>






