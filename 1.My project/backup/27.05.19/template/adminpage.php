<?php
  
   session_start();
   if(isset($_SESSION['adminlog']))
    {
   $lid=$_SESSION['adminlog'];
    
	
echo "<A HREF='index.html'>HOME</a>";
echo "<center>"; 

echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=#af7ac5>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=#af7ac5>ADMIN MENU</FONT></caption>";
echo "<tr><td ALIGN=CENTER><A HREF='itemreg.php'> ITEM REGISTRATION </a> </td>";
 echo "<tr><td ALIGN=CENTER><A HREF='item_edit.php'>UPDATE</a></td>";
 echo "<tr><td ALIGN=CENTER><A HREF='delivery.php'>DELIVERY</a></td>";
 echo "</table>";
    }

?>