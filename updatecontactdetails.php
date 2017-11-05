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
   $contact_id=$_POST['contact_id'];
   $name=$_POST['name'];
   $designation= $_POST['designation'];
     $emailid= $_POST['emailid'];
     $localext= $_POST['localext'];
$department= $_POST['department'];
$mobilenumber= $_POST['mobilenumber'];


        

        


     mysql_query("UPDATE contactdetails SET name = '$name' , designation  = '$designation' , emailid  = '$emailid' ,
department = '$department' , localext = '$localext' , mobilenumber = '$mobilenumber'   WHERE contact_id = '$contact_id'")or die(mysql_error());
        mysql_query("insert into activity_log (date,username,action) values(NOW(),'$firstname','updated Contact details ')")or die(mysql_error());
        header('location:contacts.php');
       



?>






