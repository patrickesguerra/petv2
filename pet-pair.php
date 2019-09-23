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

    <title>PetNer | Pet Pairing</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="user-details menu-toggle">
                    <div class="img-wrapper">
                        <img src="images/profile_user.jpg">
                    </div>
                    <div class="user-info">
                        <p><?php echo $_SESSION['username'];?></p>
                        <small>Username</small>
                    </div>
                </li>
                <li>
                    <a href="user-profile-settings.php">PROFILE</a>
                </li>
               
                <li>
                    <a href="index.php">CHAT ROOM</a>
                </li>
                 <li>
                    <a href="geeps.html">GPS</a>
                </li> 
                <li>
                    <a href="pet-pairing.php">PET PAIRING</a>
                </li> 
                <li>
                    <a href="pet-expert.php">PET EXPERT</a>
                </li> 
                <li>
                    <a href="login.php">LOG-OUT</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Header Content -->
        <header id="page-header-wrapper">
            <a href="#menu-toggle" class="menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <p class="page-title">PET PAIRING</p>
        </header>


        <!-- Header Content -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid pet-pairing-content">

                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="mobile-wrap">
                                <a href="pet-pair.html">
                                    <div class="pet-details-result">
                                        <img class="pet-image" src="images/bulldog-one.jpg" >
                                        <div class="pet-user-details">
                                            <div class="img-wrapper">
                                                 <img src="images/profile_user.jpg">
                                            </div>
                                            <div class="user-info">
                                                <p><?php echo $_SESSION['username'];?></p>
                                                <small>Street Address, City </small>
                                                <div class="ratings"><i class="fa fa-star"></i> 5 <i class="fa fa-eye"></i> 100 <i class="fa fa-map-marker"></i> 1.5 km</div>
                                            </div>
                                        </div>
                                    </div>
                                 </a>
                        </div>
                    </div>
                    <div class="col-md-4">&nbsp;</div>
                  <!--   <div class="col-md-12">
                        
                    </div> -->
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
