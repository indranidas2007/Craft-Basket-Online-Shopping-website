<?php

include "connection.php";

  session_start();
  echo "<center><form action=edit.php method=post><table>";
  echo "<caption> MODIFY </caption>";
  echo "<tr><td>ITEM NAME</td><td><select name='itemid'>";
       $s="SELECT * FROM item_details";
      $q = mysqli_query($connection,$s) or die("Record not found...."); 
      while($r=mysqli_fetch_row($q))
       {
          echo "<option value='$r[0]'> $r[1]</option>";     
       }
      echo "</select></td><tr><td colspan=2 align=center><input type=submit name=Modify></table></form>";

?>
