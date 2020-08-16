<?php

include "connection.php";

  session_start();
  
   /* if(isset($_SESSION['custlog']))
    {
        $lid=$_SESSION['custlog']; */
   
    

 
  
     echo "<center><form action=order.php method=post><table border=1>";
      echo "<caption> PURCHASE </caption>";
     echo "<tr><td>Item Name</td><td>ITEM DETAILS</td><td>ITEM PRICE</td><td>NO OF QUANTITY</td>";

    $s="SELECT * FROM item_details";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
    while($r=mysqli_fetch_row($q)){
        $qty=$r[4];
        if($qty!=0){
        echo "<tr><td><input type=radio name=item_id value='$r[0]'>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td><input type=hidden name=qty value='$r[4]'>$r[4]</td>";
      }
     }
     echo "<tr><td colspan=5 align=center>Item Qty<input type=text name=itno value=1></td>"; 
     echo "<tr><td colspan=5 align=center><input type=Submit value=Submit></td></form></table>";

	 //}
    



?>
