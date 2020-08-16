<html>
<head>
<script language="javascript">
    function fvalid()
	{
		 if(document.f1.lid.value==""){
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
				
		 }
		 document.f1.action="custreg.php";
		 document.f1.submit();
	}
</script>
</head>



<?php
include "connection.php";
     $s="SELECT count(*)+1 FROM customer ";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
     $r=mysqli_fetch_row($q);
     $cust=trim("CUST_".$r[0]);






echo "<center>";
echo "<form name=f1 method= post>";
echo "<table border=1>";
echo "<caption>REGISTRATION </caption>";
echo "<tr><td>CUSTOMER ID </td>";
echo "<td>$cust<input type=hidden name=cid value='$cust'></td>";

echo "<tr><td>ENTER LOGIN ID </td>";
echo "<td><input type=text name=lid size=10 maxlength=10 placeholder='enter login id'></td>";
echo "<tr><td>ENTER PASSWORD</td>";
echo "<td><input type=password name=pwd size=15 maxlength=15 placeholder='type password'></td>";
echo "<tr><td>ENTER CUSTOMER NAME</td>";
echo "<td><input type=text name=c_name size=30 maxlength=30 placeholder='type customer name'></td>";
echo "<tr><td>ENTER CUSTOMER ADDRESS</td>";
echo "<td><input type=text name=c_addr size=10 maxlength=10 placeholder='type address'></td>";
echo "<tr><td>ENTER PHONE NUMBER</td>";
echo "<td><input type=text name=c_phone size=10 maxlength=10 placeholder='type phone no'></td>";
echo "<tr><td>ENTER EMAIL</td>";
echo "<td><input type=text name=email size=20 maxlength=20 placeholder='type email'></td>";
echo "<tr><td>ENTER SEX</td>";
echo "<td><select name='sex'> <option value='Male'> Male</OPTION>";
echo "<option value='Female'>Female</OPTION></select></td>";

echo "<tr><td colspan=2 align = center> <Input type=submit value=submit onclick='fvalid();' ></td>";
echo "</table></form>";
?>

</html>