<?php
   $con= mysqli_connect('localhost','root','','collection');

     if(!$con)
     {
        die("connection failed:". "connect_error");
     }
     $name=$_POST['uname'];
     $email=$_POST['email'];
     $address=$_POST['address'];
     $reference=$_POST['filel'];
     $desc=$_POST['description'];


     $var="INSERT into collection (u_name,e_mail,a_ddress,reference,des_cription) values('$name','$email','$address','$reference','$desc')";
     if(mysqli_query($con,$var))
     {
      echo "successfully submitted!";
     }
     else{
      echo "Error:".$var."<br>".mysqli_error($con);
     }
   ?>