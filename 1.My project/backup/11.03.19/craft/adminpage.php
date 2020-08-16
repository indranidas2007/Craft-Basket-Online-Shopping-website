<?php
  
   session_start();
   if(isset($_SESSION['adminlog']))
    {
   $lid=$_SESSION['adminlog'];
    echo $lid;
    }

?>