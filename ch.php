<?php
   $con= mysqli_connect('localhost','root','','collection');

     if(!$con)
     {
        die("connection failed:". "connect_error");
     }

     $pname=$_POST['pname'];
     $nu_of_item=$_POST['tem_number_'];
     $amount=$_POST['amount'];

   
     $var="INSERT into userdata (protectname,numberofitems,amount) values('$pname','$nu_of_item','$amount')";
     if(mysqli_query($con,$var))
     {
      echo "successfully submitted!";
     }
     else{
      echo "Error:".$var."<br>".mysqli_error($con);
     
   }
   ?>