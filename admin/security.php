<?php 
   include_once("../condb.php");
   error_reporting(0);
   session_start();
   
   if(!isset($_SESSION['email'])  && $_SESSION['acctype'] ==  'administrator') {
      $_SESSION['success']  = "You must login first";
       header("Location: ../index.php");
       exit(0);
   }

?>