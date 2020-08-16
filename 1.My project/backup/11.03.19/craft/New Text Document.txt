<?php

include "connection.php";

  session_start();
  $cid= $_POST['cid'];
  $lid= $_POST['lid'];
  $pwd=$_POST['pwd'];
  $c_name=$_POST['c_name'];
  $c_addr=$_POST['c_addr'];
  $c_phone=$_POST['c_phone'];
  $email=$_POST['email'];
  $sex=$_POST['sex'];
  $md=md5($pwd);

     $s="SELECT * FROM login_details where login_id='$lid'";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
    if ($r=mysqli_fetch_row($q))
       {
         ?>    
                <script language="javascript">
                 alert("LOGIN ID already exist...");     
                 location.href="reg.php";      
               </script> 
              <?php
       }
      else
          {



echo $lid." ".$c_name." ".$c_addr." ".$c_phone." ".$email." ".$sex." ".$md;

$q1="INSERT into customer(c_id, login_id, c_name, c_address, c_phone, e_mail, sex) values ('$cid','$lid','$c_name','$c_addr', '$c_phone','$email', '$sex')";

                $results = mysqli_query( $connection,$q1) or die("Error123.........."); 
$z=0;

$q2="INSERT into login_details(login_id, password,status) values ('$lid','$md','$z')";
                $results = mysqli_query($connection,$q2) or die("Error123.........."); 

         $_SESSION['custlog']=$lid;
	header("location:custpage.php");


}



?>
