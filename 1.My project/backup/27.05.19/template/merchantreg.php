<html>
<head>
<script language="javascript">
    function fvalid()
	{
		/* if(document.f1.lid.value==""){
			 alert ("Invalid login name.....");
			document.f1.lid.focus;
            return false;			
		 }  
		 
                   
		 if(document.f1.c_name.value==""){
			 alert ("Invalid customer name.....");
			document.f1.c_name.focus;
            return false;			
		 }  
		 
		 if(isNaN(document.f1.c_phone.value)){
			 alert (" Phone no. should be numeric.....");
			document.f1.c_phone.focus;
            return false;			
				
		 }*/
		 document.f1.action="merchverify.php";
		 document.f1.submit();
	}
</script>
</head>



<?php
include "connection.php";
     $s="SELECT count(*)+1 FROM merchant ";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
     $r=mysqli_fetch_row($q);
     $mer=trim("MER_".$r[0]);






echo "<center>";
echo "<form name=f1 method= post>";
echo "<table border=1>";
echo "<caption>REGISTRATION </caption>";
echo "<tr><td>MERCHANT ID </td>";
echo "<td>$mer<input type=hidden name=m_id value='$mer'></td>";


echo "<tr><td>ENTER MERCHANT NAME</td>";
echo "<td><input type=text name=m_name size=20 maxlength=20 placeholder='type customer name'></td>";
echo "<tr><td>ENTER MERCHANT ADDRESS</td>";
echo "<td><input type=text name=m_addr size=20 maxlength=20 placeholder='type address'></td>";
echo "<tr><td>ENTER PHONE NUMBER</td>";
echo "<td><input type=text name=m_phone size=20 maxlength=20 placeholder='type phone no'></td>";
echo "<tr><td>ENTER EMAIL</td>";
echo "<td><input type=text name=m_email size=20 maxlength=20 placeholder='type email'></td>";
echo "<tr><td>ENTER ITEM ID</td>";
echo "<td><input type=text name=item_id size=20 maxlength=20 placeholder='type item_id'></td>";
echo "<tr><td colspan=2 align = center> <Input type=submit value=submit onclick='fvalid();' ></td>";
echo "</table></form>";
?>

</html>