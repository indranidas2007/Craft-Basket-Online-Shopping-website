<?php
  
   session_start();
   
   if(isset($_SESSION['custlog']))
    {
   $lid=$_SESSION['custlog'];
   

echo "<A HREF='custoption.php'>BACK</a>         ";

echo "<A HREF='logout.php'>LOGOUT</a>";
echo "<center>"; 

echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=RED>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=GREEN>CUSTOMER MENU</FONT></caption>";
echo "<tr><td ALIGN=CENTER><A HREF='item_display.php'> PURCHASE </a> </td>";
 echo "<tr><td ALIGN=CENTER><A HREF='itemreg.php'>ITEM ADD</a></td>";
 echo "</table>";



    }

?>