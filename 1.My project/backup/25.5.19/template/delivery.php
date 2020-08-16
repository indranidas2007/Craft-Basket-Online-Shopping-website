<?php
echo "<A HREF='adminpage.php'>BACK</a>";
echo "<center>"; 
echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=RED>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=GREEN>DELIVERY</FONT></caption>";

 echo "</table>";
include "connection.php";

  session_start();
  
  /*   if(isset( $_SESSION['adminlog']))
    {
        $lid= $_SESSION['adminlog'];
        */
   
    
         $pd=date('Y-m-d');
         //echo $pd;
          $s="SELECT a.c_name,a.c_address,a.c_phone,b.item_name,c.p_id FROM customer a,item_details b,purchase c";
          $s.="   where c.c_id=a.c_id and c.item_id=b.item_id and c.status=0";
          $q = mysqli_query($connection,$s) or die("Record not foundiiiii....."); 
         
          echo "<center><form action=delivery_item.php method=post><table border=1>";
         // echo "<caption> DELIVERY </caption>";
         echo "<tr><td>PURCHASE TRACK</td><td>ITEM NAME</td><td>CUSTOMER NAME </td><td>CUSTOMER ADDRESS</td><td>CUSTOMER PHONE </td></td>";
          
         
       while( $r=mysqli_fetch_row($q))
        {
         
          $cnm=$r[0];
          $cadd=$r[1];
          $cph=$r[2];
          $inm=$r[3];
          $pid=$r[4];
          echo "<tr><td><input type=radio name=pid value='$pid'>$pid</td><td>$inm</td><td>$cnm</td><td>$cadd</td><td>$cph</td>";   
        }
        echo "<tr><td colspan=5 align=center><input type=radio name=status value=1 select>Sucessfully<input type=radio name=status value=0>Cancellation</td>";
       
     
     
     echo "<tr><td colspan=5 align=center><input type=Submit value=Submit></td></form></table>";

   // }
    



?>

     
