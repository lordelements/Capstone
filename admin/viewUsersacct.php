
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
    <section id="heroSearch" class="hero-search mt-0 pt-0 pb-0">
    <div class="container">
        <div class="row mb-20">
            <div class="col-sm-12 col-sm-12 col-md-12">
              <div class="slider--content">
                    <?php 

                        $userid = $_GET['id'];

                        $result = mysqli_query ($cn, "SELECT * FROM accounts WHERE logid = '$userid'");
                        $row = mysqli_fetch_assoc($result);

                        echo ' 
                        <form class="mb-0" method="post" action="updaccount.php" enctype="multipart/form-data" style="margin-top: -100px;">
                            <input type="hidden" name="userid" value="'.$userid.'"> 
                            <div class="form-box search-properties">
                                <div class="row"><br>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fname" id="full-name" value="'.$row['fname'].'"  style="text-transform:capitalize;width: 33%;display: inline;" placeholder="First Name" required="required">
                                        <input type="text" class="form-control" name="mname" id="full-name" value="'.$row['mname'].'"  style="text-transform:capitalize;width: 32.6%;display: inline" placeholder="Middle Name"  >
                                        <input type="text" class="form-control" name="lname" id="full-name" value="'.$row['lname'].'" style="text-transform:capitalize;width: 33.5%;display: inline" placeholder="Last Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" value="'.$row['address'].'" id="full-address" style="text-transform:capitalize;width: 49.5%;display: inline" placeholder="Full Address" required="required">
                                        <input type="tel" pattern="[0-9]{11}" class="form-control" name="contact" value="'.$row['contactnumber'].'" id="contact" style="text-transform:capitalize;width: 50%;display: inline" placeholder="Contact Number" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Identification Card<span style="color:red;">*</span></label>
                                        <input type="file" name="myfile" id="img" style="width: 100%;display: inline;" class="form-control" required="required" style="display:none;">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="'.$row['email'].'" id="register-email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pw" value="'.$row['password'].'" style="width: 49.5%;display: inline;" id="register-password" placeholder="Password">
                                        <input type="password" class="form-control" name="cpassword" value="'.$row['password'].'" style="width: 50%;display: inline;" id="register-password" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="acctype" value="'.$row['acctype'].'"  id="select-account_type">
                                                <option>Select Account-type</option>
                                                <option value="administrator">Administrator</option>
                                                <option value="staff">Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>I agree with all <a target="_blank" href="https://www.privacy.gov.ph/wp-content/uploads/DPA-of-2012.pdf">Terms & Conditions</a></span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn--primary btn--block" value="Register">
                                    </div>
                                </div>
                            </div>
                        </form>';
                        ?>
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