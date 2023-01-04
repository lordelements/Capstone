<?php 
     include_once("../condb.php");
     error_reporting(0);
     session_start();

     function addAuditLog($logid, $timestamp, $email, $password) {
        global $cn;
        
        $logid = $_POST['logid'];
        $timestamp = date("Y-m-d H:i:s");
        $email = $_POST['email'];
	    $password = $_POST['password'];
        
        $sql = "INSERT INTO accounts (logid, timestamp, email, password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($cn, $sql);
        mysqli_stmt_bind_param($stmt, "isss", $logid, $timestamp, $email, $password);
        mysqli_stmt_execute($stmt);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    
	<section id="properties-carousel" class="properties-carousel pt-45 pb-90">
		<div class="container">
			<div class="row">
				<center><h5>Users Log Acitivity List</h5>
                Search: <input id="myInput" class="form-control" style="display:inline;width: 50%;" type="text" placeholder="Search by ID, Name, Address, Contact Number, and etc."></center><br>
                <?php 

                // $email = $_SESSION['email'];
                // $logid = $_SESSION['logid'];
                // Select all log activities from audit_user_log_activity table
                $sql = "SELECT * FROM audit_logs";
                $result = mysqli_query($cn, $sql);
                

                        echo 
                        "
                        <div class='container' style='width:1550px;margin-left:-200px'>
                        <table class='table table-striped'>
                        <thead>
                        <tr style = 'height: 30px;'>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Activity</th>
                            <th>Timestamp</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>";

                        // $result = mysqli_query($cn,$sql);
                        // $usercountno = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {       
                        	$query = mysqli_query($cn, "SELECT logid, email, password, FROM acounts INNER JOIN audit_logs ON s.id = a.user_id");
                        	$disp = mysqli_fetch_assoc($query);

                    ?>
                    <tbody id='myTable'>
                     <tr>
                                <!-- <td><?php echo $usercountno++ ?></td> -->
                               
                                <td><?php echo  $row['user_id'] ?></td>
                                <td><?php echo  $row['action'] ?></td>
                                <td><?php echo  $row['ip_address'] ?></td>
                                <td><?php echo  $row['timestamp'] ?></td>
                                <td><?php echo  $row['email'] ?></td>
                                <td><?php echo  $row['password'] ?></td>
                               
                        <td>
                        <!-- <a  class=" btn btn-success" style='height: 30px; width=10px;'href="viewUsersacct.php? logid= <?php echo  $row['logid'] ?>">
                        <i class="fa fa-edit"></i>Edit</a>
                        <a class=" btn btn-danger" style='height: 30px; width=20px;' onclick="return confirm('Are you sure you want to delete this record?')"  href="deluseracct.php? deleteuserid= <?php echo  $row['logid'] ?>">
                            <i class="fa fa-times"></i>Delete</a>
                        <a class=" btn btn-info" style='height: 30px; width=20px;' href="viewuser.php? viewuserid= <?php echo  $row['logid'] ?>">
                        <i class="fa fa-eye"></i>View</a> -->


                        </td>
                        </tr>
                            
                    </tbody>
                <?php	}
                	echo '</table><br>';
                	?>
			</div>
		</div>
	</section>
</body>
</html>