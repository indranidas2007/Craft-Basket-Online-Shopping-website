<?php

include "connection.php";

  session_start();
  $itemid= $_POST['item_id'];
  $itemname= $_POST['itemname'];
  $itd=$_POST['idetails'];
  $itemprice=$_POST['item_price'];
  $qty=$_POST['no_of_qty'];
  
  //echo $itemid." ".$itemname." ".$itd." ".$itemprice." ".$qty;
 // echo $itemid." ".$itemname." ".$itd." ".$itemprice." ".$qty." ";
 

     $q1="INSERT into item_details(item_id, item_name, item_detail, item_price, no_of_qty) values ('$itemid','$itemname','$itd','$itemprice', '$qty')";

                $results = mysqli_query($connection, $q1) or die("Error123.........."); 
				


 ?>