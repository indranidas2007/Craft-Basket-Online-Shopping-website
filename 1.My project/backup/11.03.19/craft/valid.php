<?php
include "connection.php";

  session_start();
  $lid= $_POST['lid'];
  $pwd=$_POST['pwd'];
  $md=md5($pwd);

  	 
     $s="SELECT * FROM login_details where login_id='$lid' and password='$md' ";
     $q = mysqli_query($connection,$s) or trigger_error(mysqli_error($connection)); 
    if ($r=mysqli_fetch_row($q))
       {
         if ($r[2]==1){
         $_SESSION['adminlog']=$lid;
        header("location:adminpage.php");
       }
        else{
      	    $_SESSION['custlog']=$lid;
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