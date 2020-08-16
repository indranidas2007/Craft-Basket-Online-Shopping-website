<html>
<head>
<script language="javascript">
    function fvalid()
	{
		
	 	 
                   
		 if(document.f1.itemname.value==""){
			 alert ("Invalid item name.....");
			document.f1.itemname.focus;
            return false;			
		 }  
		 
		 if(document.f1.idetails.value==""){
			 alert (" Invalid item details.....");
			document.f1.item_detail.focus;
            return false;
           }
 
		 if(document.f1.item_price.value==""){
			 alert ("Invalid item price .....");
			document.f1.item_price.focus;
            return false;
             }	
                 if(document.f1.no_of_qty.value==""){
			 alert ("Invalid no. of quantity ......");
			document.f1.no_of_qty.focus;
            return false;	
             } 
		
		 
		 document.f1.action="itemverification.php";
		 document.f1.submit();
	}
</script>
</head>



<?php
echo "<A HREF='adminpage.php'>BACK</a>";
echo "<center>"; 
echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=#7d3c98>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=#af7ac5>ITEMS</FONT></caption>";

 echo "</table>";
include "connection.php";
     $s="SELECT count(*)+1 FROM item_details ";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
     $r=mysqli_fetch_row($q);
     $item=trim("ITEM_".$r[0]);






echo "<center>";
echo "<form name=f1 method= post>";
echo "<table border=1>";
//echo "<caption>ITEMS </caption>";
echo "<tr><td>ITEM ID </td>";
echo "<td>$item<input type=hidden name=item_id value='$item'></td>";


echo "<tr><td>ENTER ITEM NAME </td>";
echo "<td><input type=text name=itemname size=40 maxlength=40 placeholder='type item name'></td>";
echo "<tr><td>ENTER ITEM DETAILS</td>";
echo "<td><input type=text name=idetails size=100 maxlength=100 placeholder='type item details'></td>";
echo "<tr><td>ENTER ITEM PRICE</td>";
echo "<td><input type= text name=item_price size=5 maxlength=5 placeholder='type item price'></td>";
echo "<tr><td>ENTER NO. OF ITEMS</td>";
echo "<td><input type=text name=no_of_qty size=5 maxlength=5 placeholder='type quantity'></td>";


echo "<tr><td colspan=2 align = center> <Input type=submit value=submit onclick='fvalid();' ></td>";
echo "</table></form>";
?>

</html>