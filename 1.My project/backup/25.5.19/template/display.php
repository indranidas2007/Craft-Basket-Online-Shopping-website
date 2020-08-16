<?php
include "connection.php";

  session_start();

echo "<A HREF='index.html'>HOME</a>";
echo "<center>"; 

echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=RED>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=GREEN>ITEM LIST</FONT></caption>";




  
      echo "<tr><td>Item Name</td><td>ITEM DETAILS</td><td>ITEM PRICE</td><td>NO OF QUANTITY</td>";

    $s="SELECT * FROM item_details";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
    while($r=mysqli_fetch_row($q)){
        $qty=$r[4];
        if($qty!=0){
        echo "<tr><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td><input type=hidden name=qty value='$r[4]'>$r[4]</td>";
      }
     }
    echo "</table>";
	 //}
    



?>
