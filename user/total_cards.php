
<?php  include_once("../condb.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:80,80i,200,200i,300,300i,400,400i,800,800i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@10.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > -->
</head>
<body>

    <div class="row ml-sm mt-10 flex pos-relative m-lg">

        <div class="col-md p-3 well-sm ms-10 mb-10 screen-hover">
            <div class="card mb-2 text-white" style="background-color: #3ddd; width: 30rem; height: 10rem;">
            <img src="assets/icons/res.png" class="card-img-top w-210 p-3 mt-10" style="width: 80px; height: 80px;" alt="...">
            <div class="card-body">
            
                <?php 
                $totalResidents = "SELECT * FROM residents";
                $totalResidents_count = mysqli_query($cn,$totalResidents);
                if ($total_Residents =mysqli_num_rows($totalResidents_count) ) {
                    echo '<h10 class="card-title text-white"> Total Residents '.$total_Residents.'</h10>';
                }
                else{
                    echo ' <p class="card-text text-white">No data found</p>';
                }
                
                ?>
                <a class="card-title text-white text-lg-start" href="residents.php">Residents</a>
            </div>
            </div>
        </div>


        <div class="col-md p-3 well-sm ms-10 mb-10">
            <div class="card mb-2 text-white" style="background-color: #626233; width: 30rem; height: 10rem;">
            <img src="assets/icons/offs.png" class="card-img-top w-210 p-3 mt-10" style="width: 80px; height: 80px;"  alt="...">
            <div class="card-body">
            
                <?php 
                $totalOfficials = "SELECT * FROM officials";
                $totalOfficial_count = mysqli_query($cn,$totalOfficials);
                if ($total_Officials =mysqli_num_rows($totalOfficial_count) ) {
                    echo '<h10 class="card-title text-white"> Total Officials '.$total_Officials.'</h10>';
                }
                else{
                    echo ' <p class="card-text text-white">No data found</p>';
                }
                
                ?>
                <a class="card-title text-white text-lg-start" href="officials.php">Officials</a>
            </div>
            </div>
        </div>

        <div class="col-md well-sm p-3 ms-10 mb-10">
            <div class="card mb-2 text-white" style="background-color:coral; width: 30rem; height: 10rem;">
            <img src="assets/icons/reps.png" class="card-img-top w-210 p-3 mt-10" style="width: 60px; height: 60px;"  alt="...">
            <div class="card-body">
            
                <?php 
                    $totalreports = "SELECT * FROM reports";
                    $totalreports_count = mysqli_query($cn,$totalreports);
                    if ($total_reports =mysqli_num_rows($totalreports_count) ) {
                        echo '<h10 class="card-title text-white"> Total Reports '.$total_reports.'</h10>';
                    }
                    else{
                        echo ' <p class="card-text text-white">No data found</p>';
                    }
                    
                ?>
             <a class="card-title text-white text-lg-start" href="reports.php">Reports</a>
            </div>
            </div>
        </div>
    </div>

    <div class="row ml-sm mt-30 flex pos-relative m-lg">

        <div class="col-md well-sm p-3 ms-10 mb-10">
            <div class="card mb-2 bg-secondary text-white" style="width: 30rem; height: 10rem;">
            <img src="assets/icons/users.png" class="card-img-top w-210 p-3 mt-10" style="width: 80px; height: 80px;"  alt="...">
            <div class="card-body">
            
                <?php
                    $totalUsers = "SELECT * FROM accounts";
                    $totalUsers_count = mysqli_query($cn,$totalUsers);
                    if ($total_Users =mysqli_num_rows($totalUsers_count) ) {
                        echo '<h10 class="card-title text-white"> Total Users '.$total_Users.'</h10>';
                    }
                    else{
                        echo ' <p class="card-text text-white">No data found</p>';
                    }
                    
                ?>
            
            </div>
            </div>
        </div>

        <div class="col-md well-sm p-3 ms-10 mb-10">
            <div class="card mb-2 text-white" style="background-color: #20c997;width: 30rem; height: 10rem;">
            <img src="assets/icons/male.png" class="card-img-top w-210 p-3 mt-10" style="width: 80px; height: 80px;"  alt="...">
            <div class="card-body">
            
                <?php 
                   
                    $totalMale = "SELECT gender FROM residents WHERE gender = 'male'";
                    $totalMale_count = mysqli_query($cn,$totalMale);
                    if ($total_Male =mysqli_num_rows($totalMale_count) ) {
                        echo '<h10 class="card-title text-white"> Total Male '.$total_Male.'</h10>';
                    }
                    else{
                        echo ' <p class="card-text text-white">No data found</p>';
                    }
                    
                ?>
            <div></div>
            </div>
            </div>
        </div>

        <div class="col-md well-sm p-3 ms-10 mb-10 height-800">
            <div class="card mb-2 text-white" style="background-color: pink; width: 30rem; height: 10rem;">
            <img src="assets/icons/she_users.png" class="card-img-top w-210 p-3 mt-10" style="width: 80px; height: 80px;"  alt="...">
            <div class="card-body">
            
                <?php 
                   
                    $totalFemale = "SELECT gender FROM residents WHERE gender = 'female'";
                    $totalFemale_count = mysqli_query($cn,$totalFemale);
                    if ($total_Female =mysqli_num_rows($totalFemale_count) ) {
                        echo '<h10 class="card-title text-dark"> Total Female '.$total_Female.'</h10>';
                    }
                    else{
                        echo ' <p class="card-text text-dark">No data found</p>';
                    }
                    
                ?>
            <div></div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>