<?php

echo "<A HREF='index.html'>HOME</a>";
echo "<center>"; 

echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=RED>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=GREEN>PURCHASE</FONT></caption>";

 echo "</table>";


include "connection.php";

  

   $pid= $_POST['pid'];
   $dd=date('Y-m-d');
   $status= $_POST['status'];
   $delid=$pid+100;
   
  $q112="update purchase set status=1 where p_id='$pid' ";
  $results = mysqli_query($connection, $q112) or die("Error.........."); 

  $q2="INSERT into delivery_details(del_id,d_date,p_id, status) values ('$delid','$dd','$pid','$status')";
                $results = mysqli_query($connection, $q2) or die("Error123..........");  
  if($status==0){
	
     $s="SELECT item_id, no_of_qty FROM purchase where p_id='$pid'";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
     $r=mysqli_fetch_row($q);
     $itemid=$r[0];
     $qty=$r[1];
     $q="update item_details set  no_of_qty=no_of_qty + $qty where item_id='$itemid' ";
     $results = mysqli_query($connection, $q) or die("Error.........."); 

     }
   

	
				
   // header("location:delivery.php");
				  
				  


?>
