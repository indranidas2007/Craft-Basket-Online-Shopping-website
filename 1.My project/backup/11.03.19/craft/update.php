<?php

include "connection.php";

   $itemid= $_POST['itemid'];
  $iname= $_POST['itemname'];
  $itd=$_POST['itemdel'];
  $pr=$_POST['itempr'];
  $qty=$_POST['itemqty'];
 
  $q112=" UPDATE item_details SET item_name='$iname', item_detail='$itd', item_price='$pr', no_of_qty='$qty' WHERE item_id='$itemid' ";
 $results = mysqli_query($connection, $q112) or die("Error updating record..."); 
	
		
				
    header("location:item_edit.php");
				  
				  


?>
