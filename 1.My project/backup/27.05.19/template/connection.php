
<?php

    // Creating a database connection

    $connection = mysqli_connect("localhost", "root", "", "test");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }


    // Selecting a database 

    $db_select = mysqli_select_db($connection, "test");
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

 // $s="SELECT * FROM logindetails";
    // $q = mysqli_query($connection,$s) or trigger_error(mysqli_error($connection)); 
   // $r=mysqli_fetch_row($q);
  //echo $r[1];

   

?>