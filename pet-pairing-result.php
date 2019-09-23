
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
                    <a href="geeps.html">GPS</a>
                </li> s
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
            <p class="page-title" style="padding-left: 10px;">FIND YOUR PET'S SOULMATE!</p>
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
                            <div class="col-md-6">
                                <a href="pet-pair.html">
                                    <div class="pet-details-result">
                                        <img class="pet-image" src="images/bulldog-one.jpg" >
                                        <div class="pet-user-details">
                                            <div class="user-info" style="width: 100%;">
                                                <p class="text-center">YOUR PET</p>
                                            </div>
                                        </div>
                                    </div>
                                 </a>
                            </div>
                            <div class="col-md-6">
                                <a href="pet-pair.html">
                                    <div class="pet-details-result">
                                        <img class="pet-image" src="images/bulldog-two.jpg" >
                                        <div class="pet-user-details">
                                           <div class="user-info" style="width: 100%;">
                                                <p class="text-center">FATED PAIR</p>
                                            </div>
                                        </div>
                                    </div>
                                 </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                  <center>
                                        <h5>##</h5>
                                        <h5>CHANGE RESULT...<h5>
                                        <button id="resultPair" type="submit" class="btn btn-custom-one mt-2">PAIR</button>
                                  </center>
                                  <div class="resultPairdisplay mt-5" style="display: none;">
                                        <center>
                                             <p><i>"Love is in the air! / Aww snap..."</i></p>
                                             <h5>IT'S [NOT] A MATCH.../!</h5>
                                        </center>
                                     
                                       <div class="form-row">
                                             <div class="form-group col-md-6">
                                                <a href="pet-pairing-viewresult.html" class="btn btn-custom-one mt-2" style="width: 160px;">VIEW RESULT</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                 <a href="chat-room-user.html" class="btn btn-custom-one mt-2" style="width: 160px;">CHAT ROOM</a>
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
