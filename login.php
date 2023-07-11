<?php
   $con= mysqli_connect('localhost','root','','login');

     if(!$con)
     {
        die("connection failed:". "connect_error");
     }
     $email=$_POST['emailid'];
     $password=$_POST['password'];
     
     $var="INSERT into signin (email_id,password_s) values('$email','$password')";
     if(mysqli_query($con,$var))
     {
      echo "successfully submitted!";
     }
     else{
      echo "Error:".$var."<br>".mysqli_error($con);
     }
   ?>