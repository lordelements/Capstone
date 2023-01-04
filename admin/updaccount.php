<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$userid = $_POST['userid'];
$position = $_POST['position'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['pw'];
$contact = $_POST['contact'];
$acctype = $_POST['acctype'];
// $idcard = $_POST['idcard'];

//echo $resid . " " . $lastname . " " . $middlename . " " . $firstname . " " . $birthdate . " " . $civilstatus . " " . $address . " " . $contact;

$res = mysqli_query($cn, "UPDATE accounts SET position='$position', lname='$lname', mname='$mname', fname='$fname', email='$email', address='$address', pw='$password', contact='$contact', acctype='$acctype' WHERE logid='$userid'");
	
	function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Record updated successfully!", "users_account.php");

?>