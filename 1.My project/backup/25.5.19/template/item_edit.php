<?php
echo "<A HREF='adminpage.html'>BACK</a>";
echo "<center>"; 
echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=RED>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=GREEN>MODIFY</FONT></caption>";

 echo "</table>";
include "connection.php";

  session_start();
  echo "<center><form action=edit.php method=post><table>";
  //echo "<caption> MODIFY </caption>";
  echo "<tr><td>ITEM NAME</td><td><select name='itemid'>";
       $s="SELECT * FROM item_details";
      $q = mysqli_query($connection,$s) or die("Record not found...."); 
      while($r=mysqli_fetch_row($q))
       {
          echo "<option value='$r[0]'> $r[1]</option>";     
       }
      echo "</select></td><tr><td colspan=2 align=center><input type=submit name=Modify></table></form>";

?>
