<?php
  
   session_start();
   if(isset($_SESSION['custlog']))
    {
   $lid=$_SESSION['custlog'];
    echo "kkkl".$lid;
    }

?>