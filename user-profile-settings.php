<?php
session_start();
if(isset($_SESSION['username'])){
//echo 'how are you '.$_SESSION['username']." ";
}
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PetNer</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon.ico">
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul id="sidebar-nav" class="sidebar-nav">
                <li class="user-details">
                     <a href="index1.php">
                    <div class="img-wrapper">
                        <img src="images/default-user.png">
                    </div>
                    <div class="user-info">
                        <p><?php echo $_SESSION['username'];?></p>
                        <small>Username</small>
                    </div>
                </a>
                </li>
               <li>
                    <a href="user-change-profile.php">CHANGE PROFILE</a>
                </li>
                 <li>
                    <a href="user-add-pet.php">ADD A PET</a>
                </li> 
                <li>
                    <a href="user-edit-pet-database.php">EDIT PET DATABASE</a>
                </li> 
                <li>
                      <a href="change-password.php">CHANGE PASSWORD</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Header Content -->
        <header id="page-header-wrapper">
           <p class="page-title" style="padding-left: 10px;">CHANGE PROFILE</p>
        </header>


        <!-- Header Content -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        
                          <div class="mobile-wrap" style="padding:0px;">
                            <img src="images/profile_user.jpg" class="img-fluid" style="border-radius: 10px 10px 0px 0px;">
                            
                            <div class="mx-2">
                                 <CENTER>
                                <h3><?php echo $_SESSION['username'];?></h3>
                                <small><i>email@email.com</i></small>
                                <p class="mb-0">Occupation</p>
                                </CENTER>
                                <p class="m-0" style="color:#9b9b9b;">Trust Rate</p>
                                <hr class="m-0">
                                <p class="text-right m-0" style="color:#9b9b9b;">##.##</p>
                                  <p class="m-0"  style="color:#9b9b9b;">Affiliates</p>
                                <hr class="m-0">
                                <p class="text-right m-0"  style="color:#9b9b9b;">Affiliates</p>
                            </div>
                            <div class="form-group">
                                <center>
                                     <a class="btn btn-custom-one mt-4" style="width: 175px;" href="dashboard.html" >DASHBOARD</a>
                                </center>
                            </div>
                        </div>

                        
                    </div>
                    <div class="col-md-4">&nbsp;</div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
