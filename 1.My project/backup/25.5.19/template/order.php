
<?php

include "connection.php";

  session_start();
   if(isset($_SESSION['custlog']))
    {
        $cid=$_SESSION['custlog']; 
  
  $itemid= $_POST['item_id'];
  $itno= $_POST['itno'];
  
  
 if (isset ($itemid)){
     $s3="SELECT * FROM  item_details where item_id='$itemid'";
     $q3 = mysqli_query($connection, $s3) or die("Record not found....."); 
     $r3=mysqli_fetch_row($q3);
      
     $itname=$r3[1];
     $itdetail=$r3[2];
     $itprice=$r3[3];;
     $qty=$r3[4];
     $s12="SELECT * FROM  customer where c_id='$cid'";
     $q = mysqli_query($connection, $s12) or die("Record not found....."); 
     $r=mysqli_fetch_row($q);
     $nm=$r[2];
     $addr=$r[3];
     $phno=$r[4];

     $s13="SELECT count(*)+1 FROM purchase";
     $q13 = mysqli_query($connection,$s13) or die("Record not found....."); 
     $r13=mysqli_fetch_row($q13);
    
   
  if($itno<=$qty) {

     $pd=date('Y-m-d');
     $pid=100+$r13[0];
     $did=200+$r13[0];
     $qty=$qty - $itno;
     $total=$itno*$itprice;

    $q112="update item_details set  no_of_qty='$qty' where item_id='$itemid' ";
    $results = mysqli_query($connection,$q112) or die("Error.........."); 
     $st=0;
    $q2="INSERT into purchase(p_id, c_id,item_id,p_date,item_price,no_of_qty,grand_tot,status) values ('$pid','$cid','$itemid','$pd','$itprice','$itno','$total','$st')";
                $results = mysqli_query($connection,$q2) or die("Error123.........."); 

   

     //$q3="INSERT into delivery_details(del_id,p_id,status) values ('$did','$pid', '$z')";
             //   $results = mysqli_query($connection,$q3) or die("Error123.........."); 






     
     



     echo $itemid." ".$itno.  "  ".$qty.  "  ".$itname.  "  ".$itdetail.  "  ".$itprice.  "  ".$nm.  "  ".$addr.  "  ".$phno."     ".$total;
    }
   }

$_SESSION['name']=$nm;
$_SESSION['address']=$addr;
$_SESSION['phone']=$phno;
$_SESSION['itemname']=$itname;
$_SESSION['price']=$total;
$_SESSION['no_of_qty']=$itno;
  header("location:print.php");
	}
	



			
				
  //  header("location:item_display.php");


  

     

 ?>