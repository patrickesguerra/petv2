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
                <li class="user-details">
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
                    <a href="geeps.php">GPS</a>
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
            <p class="page-title" style="padding-left: 10px;">SOULMATE SEARCH RESULTS</p>
        </header>


        <!-- Header Content -->


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid pet-pairing-content">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="mobile-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                  <div class="p-2">
                                         <center>
                                                <p>We have found results why it    did match/ didn't match:<p>
                                          </center>
                                        <div class="form-row p-2" style="background: #319ec0;color: #fff;border-radius: 10px 0px 10px 0px;">
                                            <div class="form-group col">
                                                 <h5> <i class="fa fa-star"></i> Color: <span class="float-right">Perfect!</span></h5>
                                                 <small><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus arcu nunc, nec ultricies tortor pellentesque non. </i></small>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-row p-2" style="background: #c05331;color: #fff;border-radius: 10px 0px 10px 0px;">
                                            <div class="form-group col">
                                                 <h5><i class="fa fa-star"></i> Weight: <span class="float-right">Terrible!</span></h5>
                                                  <small><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus arcu nunc, nec ultricies tortor pellentesque non. </i></small>
                                            </div>
                                        </div>

                                  </div>
                            </div>
                          
                        </div>
                        <br>
                        </div>
                    </div>
                    <div class="col-md-4">&nbsp;</div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->



        <!-- Page Content -->
      <!--   <div id="page-content-wrapper">
            <div class="container-fluid pet-pairing-content">

               
               
            </div>
        </div> -->
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

     $("#resultPair").click(function(e) {
         e.preventDefault();
        $(".resultPairdisplay").show(); 
      
    });


    </script>

</body>

</html>
