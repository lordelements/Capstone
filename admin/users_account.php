
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="zytheme" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Real Estate html5 template">
		<link href="assets/images/favicon/favicon.png" rel="icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="assets/css/external.css" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="wrapper" class="wrapper clearfix">
		
				<?php include 'navbar.php'; ?>	
		
		</div>
		</nav>
	</header>
		<section id="heroSearch" class="hero-search mtop-0 pt-0 pb-0">
		<!-- <div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="slider--content">
						<form class="mb-0" method="post" action="funcSignup.php" enctype="multipart/form-data" style="margin-top: -100px;">
							<div class="form-box search-properties">
								<div class="row">
								 <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="position" id="select-positon">
                                            <option>Select Position</option>
                                            <option value="Punong Barangay">Punong Barangay</option>
                                            <option value="Sangguniang Barangay Member">Sangguniang Barangay Member</option>
                                            <option value="Barangay Secretary">Barangay Secretary</option>
                                            <option value="Barangay Treasurer">Barangay Treasurer</option>
                                            <option value="SK Chairman">SK Chairman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" class="form-control" name="fname" id="full-name" placeholder="First Name">
											</div>
										</div>
                                </div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" class="form-control" name="mname" id="full-name" placeholder="Middle Name">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
												<input type="text" class="form-control" name="lname" id="full-name" placeholder="Last Name" required>
											</div>
										</div>
									</div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" id="full-address" style="text-transform:capitalize;width: 49.5%;display: inline" placeholder="Full Address" required="required">
                                    <input type="tel" pattern="[0-9]{11}" class="form-control" name="contact" id="contact" style="text-transform:capitalize;width: 50%;display: inline" placeholder="Contact Number" required="required">
                                </div>
                                <div class="form-group">
                                <label>Identification Card<span style="color:red;">*</span></label>
                                <input type="file" name="myfile" id="img" style="width: 100%;display: inline;" class="form-control" required="required" style="display:none;">
                                </div>
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" id="register-email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pw" style="width: 49.5%;display: inline;" id="register-password" placeholder="Password">
                                    <input type="password" class="form-control" name="cpw" style="width: 50%;display: inline;" id="register-password" placeholder="Confirm Password">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="acctype" id="select-account_type">
                                                <option>Select Account-type</option>
                                                <option value="administrator">Administrator</option>
                                                <option value="staff">Staff</option>
                                            </select>
                                    </div>
                                </div>
                                </div>
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span>I agree with all <a target="_blank" href="https://www.privacy.gov.ph/wp-content/uploads/DPA-of-2012.pdf">Terms & Conditions</a></span>
                                        <input type="checkbox">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                                    <input type="submit" class="btn btn--primary btn--block" value="Register">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->

        <div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="slider--content">
						<form class="mb-0" method="post" action="funcResidents.php" enctype="multipart/form-data">
							<div class="form-box search-properties">
								<div class="row"><br>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="position" id="select-positon">
                                                    <option>Select Position</option>
                                                    <option value="Punong Barangay">Punong Barangay</option>
                                                    <option value="Sangguniang Barangay Member">Sangguniang Barangay Member</option>
                                                    <option value="Barangay Secretary">Barangay Secretary</option>
                                                    <option value="Barangay Treasurer">Barangay Treasurer</option>
                                                    <option value="SK Chairman">SK Chairman</option>
                                                </select>
                                            </div>
										</div>
									</div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="select--box">
                                                <input type="email" class="form-control" name="email" id="register-email" placeholder="Email Address" required="required">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <div class="select--box">
                                                <input type="text" class="form-control" name="fname" id="full-name" placeholder="First Name"
                                                 style="text-transform:capitalize;" required="required">
                                                </div>
                                            </div>
                                    </div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
                                            <input type="text" class="form-control" name="mname" id="full-name" placeholder="Middle Name"
                                             style="text-transform:capitalize;" required="required">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<div class="form-group">
											<div class="select--box">
                                            <input type="text" class="form-control" name="lname" id="full-name" placeholder="Last Name"
                                             style="text-transform:capitalize;" required="required">
											</div>
										</div>
									</div>
									
                                    
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
                                            <input type="text" class="form-control" name="address" id="full-address" placeholder="Full Address" required="required">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
                                            <input type="tel" pattern="[0-9]{11}" class="form-control" name="contact" id="contact" placeholder="Contact Number" required="required">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
                                            <input type="password" name="pw" class="form-control" id="register-password" placeholder="Password"  required="required">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
                                            <input type="password" name="cpw" class="form-control" id="register-password" placeholder="Confirm Password" required="required">
											</div>
										</div>
									</div>
									
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="form-group">
											<div class="select--box">
												<i>Identification Card</i>
												<input type="file" class="form-control" name="myfile" required="required"/>
											</div>
										</div>
									</div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="acctype" id="select-account_type">
                                                        <option>Select Account-type</option>
                                                        <option value="administrator">Administrator</option>
                                                        <option value="staff">Staff</option>
                                                    </select>
                                            </div>
                                    </div>
                                    </div>
									<div class="col-xs-12 col-sm-6 col-md-12">
										<input type="submit" value="Add Users" name="submit" class="btn btn--primary btn--block">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
			<div class="slide--item bg-overlay bg-overlay-dark3">
				<div class="bg-section">
					<img src="../bg1.jpg" alt="background">
				</div>
			</div>
			<div class="slide--item bg-overlay bg-overlay-dark3">
				<div class="bg-section">
					<img src="../bg2.jpg" alt="background">
				</div>
			</div>
			<div class="slide--item bg-overlay bg-overlay-dark3">
				<div class="bg-section">
					<img src="../bg3.jpg" alt="background">
				</div>
			</div>
		</div>
	</section>
    
	<section id="properties-carousel" class="properties-carousel pt-45 pb-90">
		<div class="container">
			<div class="row">
				<center><h5>Users Account List</h5>
                Search: <input id="myInput" class="form-control" style="display:inline;width: 50%;" type="text" placeholder="Search by ID, Name, Address, Contact Number, and etc."></center><br>
                <?php 

                // $email = $_SESSION['email'];
                // $logid = $_SESSION['logid'];

                $sql = "SELECT * FROM accounts";

                        echo 
                        "
                        <div class='container' style='width:1550px;margin-left:-200px'>
                        <table class='table table-dark-striped table-hover'>
                        <thead>
                        <tr style = 'height: 30px;'>
                        <th style = 'width: 180px;'>Total Users</th>
                        <th style = 'width: 180px;'>ID</th>
                        <th style = 'width: 150px;'>Position</th>
                        <th style = 'width: 350px;'>Name</th>
                        <th style = 'width: 150px;'>Email</th>
                        <th style = 'width: 150px;'>Password</th>
                        <th style = 'width: 450px;'>Address</th>
                        <th style = 'width: 300px;'>Contact</th>
                        <th style = 'width: 300px;'>Account Type</th>
                        <th style = 'width: 300px;'>ID Card</th>
                        <th style = 'width: 550px;'>Action</th>
                        </tr>";

                        $result = mysqli_query($cn,$sql);
                        $usercountno = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {       
                        	$query = mysqli_query($cn, "SELECT * FROM accounts");
                        	$disp = mysqli_fetch_assoc($query);

                    ?>
                    <tbody id='myTable'>
                     <tr>
                                <td><?php echo $usercountno++ ?></td>
                               
                                <td ><?php echo  $row['logid'] ?></td>
                                <td><?php echo  $row['position'] ?></td>
                                <td><?php echo  $row['lname'].' ' . $row['mname'] . ' ' . $row['fname'] ?></td>
                                <td><?php echo  $row['email']?></td>
                                <td><?php echo  $row['password'] ?></td>
                                <td><?php echo  $row['address'] ?></td>
                                <td><?php echo  $row['contactnumber'] ?></td>
                                <td><?php echo  $row['acctype'] ?></td>
                                <td>
                                   <?php echo '<img src="../images/.'.$row['idcard'].' '.$row['email'].' 
								   "width=100px; height=100px; margin: 5px 10px 10px 5px" alt="Image">'?>
                                </td>
                        <td>
                        <a  class=" btn btn-success" style='height: 30px; width=10px;'href="viewUsersacct.php?id= <?php echo  $row['logid'] ?>">
                        <i class="fa fa-edit"></i></a>
                        <a class=" btn btn-danger" style='height: 30px; width=20px;' onclick="return confirm('Are you sure you want to delete this record?')"  href="deluseracct.php? deleteuserid= <?php echo  $row['logid'] ?>">
                            <i class="fa fa-trash"></i></a>
                        <!-- <a class=" btn btn-info" style='height: 30px; width=20px;' href="viewuser.php? viewuserid= <?php echo  $row['logid'] ?>">
                        <i class="fa fa-eye"></i>View</a> -->


                        </td>
                        </tr>
                                <!-- echo"<tbody id='myTable'>";
                                echo "<tr>";
                                
                                echo "<td>" . $row['logid'] . " </td> ";
                                echo "<td>" . $row['position'] . " </td> ";
                                echo '<td>'. $row['lname'].' ' . $row['mname'] . ' ' . $row['fname'] . '</td>';
                                echo "<td>" . $row['email'] . " </td> ";
                                echo "<td>" . $row['password'] . "  </td> ";
                                echo "<td>" . $row['address'] . "</td> ";
                                echo "<td>" . $row['contactnumber'] . "</td> ";
                                echo "<td class='btn btn-light' style='width:100%;border:1px solid black;color:black' >" . $row['idcard'] . "</td> ";
                                echo "<td class='btn btn-light' style='width:100%;border:1px solid black;color:black' >" <img src="images/" . $row['idcard'] . " " class="img-fluid" width="200" /> 
                                 "</td> ";
                                echo "<td>" . $row['status'] . "</td> ";

                                if ($row['status'] == "0")
                                {
                                	$stat = "Active";
                                }
                                else {
                                	$stat = "Archived";
                                }

                                echo "<td>" . $stat . "</td> ";
                                // echo "<td><a target='_blank' class='btn btn-light' style='width:100%;border:1px solid black;color:black' href='".$row['idcard']."'>View Image</a></td> ";

                                echo "<td><a class='btn btn-success' style='width:49%;border:1px solid black;color:black' href='viewusersAccount.php?id=" . $row['logid'] . "'>Edit</a> ";

                                if ($row['status'] == "0")
                                {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='archiveOfficials.php?id=" . $row['logid'] . "'>Archive</a></td> ";
                                }
                                else {
                                	echo "<a class='btn btn-warning' style='width:49%;border:1px solid black;color:black' href='activateOfficials.php?id=" . $row['logid'] . "'>Restore</a></td> ";
                                } -->

                                
                    </tbody>
                <?php	}
                	echo '</table><br>';
                	?>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/loadGeo.js"></script>



<script>
	var myArray = []
	

	$.ajax({
		method:'GET',
		url:'homerentalsystem/user/assets/geo_api.json',
		// url:'https://reqres.in/api/users',
		success:function(response){
			myArray = response.data
			// buildTable(myArray)
			console.log(myArray)
		}
	})



	function buildTable(data){
		var dropdown = document.getElementById('select-location')

		for (var i = 0; i < data.length; i++){
			var row = `	<option>${data[i].province_list}</option> `
			table.innerHTML += row


		}
	}

</script>


</body>
<!-- index Sun, 18 Jul 2021 09:33:18 GMT -->
</html>