<?php 
session_start();
require_once("connection.php"); ?><!DOCTYPE html>
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
                <li class="user-details ">
                    <a href="index1.php">
                        <div class="img-wrapper">
                            <img src="images/default-user.png">
                        </div>
                        <div class="user-info">
                            <p><?php echo $_SESSION['username'];?></p>
                            <small>Username</small>
                        </div>
                    <a href="index.html">
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
            <p class="page-title" style="padding-left: 10px;">PET EXPERT</p>
        </header>


        <!-- Header Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid pet-pairing-content">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="mobile-wrap">
                                <form class="m-3">

                                    <div class="form-group">
                                            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SEARCH">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState" class="">Occupation filter</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>ITEM 1...</option>
                                          </select>
                                    </div>
                                    <p class="m-0">WE FOUND ## RESULT</p>
                                    <hr class="mt-0 mb-4">
                                   
                                     <a href="pet-expert-account.html" style="color: inherit;text-decoration:none;">
                                        <div class="form-row">
                                            <div class="form-group col-3">
                                                <img src="images/default-user.png" style="width: 50px;">
                                            </div>
                                            <div class="form-group col">
                                                <p class="m-0">Name: <strong class="float-right">FNAME MI LNAME</strong></p>
                                                 <p class="m-0">Occupation: <strong class="float-right">Occupation</strong></p>
                                            </div>
                                        </div>
                                     </a>

                                </form>

                        </div>
                    </div>
                    <div class="col-md-4">&nbsp;</div>
                </div>
            </div>
        </div>


       

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
