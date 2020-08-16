<?php

include "connection.php";

  session_start();
  $itemid= $_POST['itemid'];
 
 
  
     echo "<center><form action=update.php method=post><table border=1>";
      echo "<caption> UPDATE </caption>";
     

    $s="SELECT * FROM item_details where item_id='$itemid' ";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
    if ($r=mysqli_fetch_row($q)){
        echo "<tr><td>ITEM ID</td><td>$itemid<input type=hidden name=itemid value='$itemid'></td>";
        echo "<tr><td>ITEM NAME</td><td><input type=text name=itemname value='$r[1]'></td>";
        echo "<tr><td>ITEM DETAILS</td><td><input type=text name=itemdel value='$r[2]'></td>";
        echo "<tr><td>ITEM PRICE</td><td><input type=text name=itempr value='$r[3]'></td>";
        echo "<tr><td>ITEM QUANTITY</td><td><input type=text name=itemqty value='$r[4]'></td>";
      }
     echo "<tr><td colspan=2 align=center><input type=Submit value=UPDATE></td></form></table>";

    
    



?>
