<?php
	include("condb.php");
	session_start();
	// $email = $_POST['email'];
	// $password = $_POST['password'];
	// $sql= "SELECT * FROM accounts WHERE email='$email' AND password='$password' LIMIT 1";
	// $results= mysqli_query($cn,$sql);
	// $sql= mysqli_query($cn,"SELECT * FROM accounts WHERE email= '$email' AND password= '$password' LIMIT 1");
	// $row= mysqli_num_rows($sql);
	// $rows=mysqli_fetch_assoc($sql);

	// $log = $rows['acctype'];

		// if($row<>0)
	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql= "SELECT * FROM accounts WHERE email='$email' AND password='$password' LIMIT 1";
		$results= mysqli_query($cn,$sql);
			
		if(mysqli_num_rows($results) == 1)
		{
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['acctype'] == 'administrator') {
				$_SESSION['logid'] = $logged_in_user;
				$_SESSION['success']  = "Hello! Welcome to Administrator Dashboard";
				$_SESSION['email'] = $email;
				$_SESSION['logid'] = $logid;
				header("location:admin/index.php");
				
			}
			
			if ($logged_in_user['acctype'] == 'staff') {
				$_SESSION['logid'] = $logged_in_user;
				$_SESSION['success']  = "Hello! Welcome to Staff Dashboard";
				$_SESSION['email'] = $email;
				$_SESSION['logid'] = $logid;
				header("location:user/userindex.php");
			}
			
		}
		else
		{
			function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("Incorrect login credentials!", "index.php");
		}
	}
	

?>