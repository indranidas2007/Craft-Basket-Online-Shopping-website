<?php

include "connection.php";

  session_start();
  $mid= $_POST['m_id'];
  $itemid= $_POST['item_id'];
  
  $mname=$_POST['m_name'];
  $maddr=$_POST['m_addr'];
  $mphone=$_POST['m_phone'];
  $memail=$_POST['m_email'];
 
  

  /*   $s="SELECT * FROM merchant where m_id='$mid'";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
    if ($r=mysqli_fetch_row($q))
       {
             ?>
                <script language="javascript">
                 alert("LOGIN ID already exist...");     
                 location.href="merchantreg.php";      
               </script> 
              <? php
       }
      else
          {



echo $mid." ".$mname." ".$maddr." ".$mphone." ".$memail." ".$itemid." "; */

$q1="INSERT into merchant(m_id, m_name, m_addr, m_phone, m_email, item_id) values ('$mid','$mname','$maddr', '$mphone','$memail', '$itemid')";

                $results = mysqli_query( $connection,$q1) or die("Error123.........."); 


/*$q2="INSERT into login_details(login_id, password,status) values ('$lid','$md','$z')";
                $results = mysqli_query($connection,$q2) or die("Error123.........."); 

         $_SESSION['merlog']=$lid;
	header("location:merpage.php");


		  }

*/

?>
