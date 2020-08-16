<?php
include "connection.php";

  session_start();
  $lid= $_POST['lid'];
  $pwd=$_POST['pwd'];
  $md=md5($pwd);
    
  	 
     $s="SELECT * FROM login_details where login_id='$lid' and password='$md' ";
     $q = mysqli_query($connection, $s) or die("Record not found$$$$$$$$$....."); 
    if ($r=mysqli_fetch_row($q))
       {
         if ($r[2]==1){
         $_SESSION['adminlog']=$lid;
        header("location:adminpage.php");
       }
        else{
             $s1="SELECT c_id FROM customer where login_id='$lid' ";
             $q1 = mysqli_query($connection, $s1) or die("Record not found$$$$$$$$$....."); 
             $r=mysqli_fetch_row($q1);
             $a=$r[0]; 
      	    $_SESSION['custlog']=$a;
          
	header("location:custpage.php");
	}
        
      }
     else
      {
         ?>    
                <script language="javascript">
                 alert("Invalid User, Move to Login Page...");     
                 location.href="login.php";      
               </script> 
              <?php

       }


?>