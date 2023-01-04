<?php

    include ('../condb.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();

 // delete
 if (isset($_GET['deleteuserid']) && !empty($_GET['deleteuserid'])){
    $logid=$_GET['deleteuserid'];
    $sql = "DELETE FROM accounts WHERE logid= $logid";
    $result = $cn->query($sql);
    echo "<script>alert('Account is successfully deleted.')</script>";
    header('Location: users_account.php');
   //  return $result;

   }
   else {
    echo "<script>alert('Data is not deleted.')</script>";
   }


?>