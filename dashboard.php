<?php
session_start();
if(isset($_SESSION['username'])){
//echo 'how are you '.$_SESSION['username']." ";
}
?>
<!DOCTYPE html>
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
           
        </header>


        <!-- Header Content -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <!-- <div class="mobile-wrap" style="background: linear-gradient(to bottom, #87e0fd 0%,#53cbf1 40%,#4da7c3 100%);">
                                 <img src="images/logo/logo-three.png" class="img-fluid" style="padding: 80px;">
                        </div> -->
                        <div class="mobile-wrap" style="padding:0px;">
                            <!-- <img src="images/profile_user.jpg" class="img-fluid" style="border-radius: 10px 10px 0px 0px;">
                             -->
                            <div class="m-3">
                                <CENTER>
                                <h3>DASHBOARD</h3>
                                </CENTER>
                                <p class="m-0" style="color:#9b9b9b;"># of Pets Owned <span class="float-right m-0" style="color:#9b9b9b;">####</span></p>
                                <hr>
                                <p class="m-0" style="color:#9b9b9b;"># of Pets Bred <span class="float-right m-0" style="color:#9b9b9b;">####</span></p>
                                <hr>
                                <p class="m-0" style="color:#9b9b9b;">Most Common Breed <span class="float-right m-0" style="color:#9b9b9b;">Beagle</span></p>
                                <hr>
                                <p class="m-0" style="color:#9b9b9b;"># of Vet Consulations <span class="float-right m-0" style="color:#9b9b9b;">####</span></p>
                                <hr>
                                <p class="m-0" style="color:#9b9b9b;"># of Vet Check-ups <span class="float-right m-0" style="color:#9b9b9b;">####</span></p>
                                <hr>
                                <p class="m-0" style="color:#9b9b9b;"># of Pet Vaccinated <span class="float-right m-0" style="color:#9b9b9b;">####</span></p>
                                <hr>
                            
                            
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
