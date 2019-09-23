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
                <li class="user-details ">
                    <div class="img-wrapper">
                        <img src="images/default-user.png">
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
            <p class="page-title" style="padding-left: 10px;">FIND YOUR PET'S SOULMATE!</p>
        </header>


        <!-- Header Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid pet-pairing-content">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="mobile-wrap">
                                <form class="m-3">
                                    <div class="form-row ">
                                          <label for="inputState" class="">SPECIES</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>ITEM 1...</option>
                                            <option>Dog</option>
                                            <option>Cat</option>
                                            <option>Bird</option>
                                            <option>Rodent</option>
                                            <option>Spider</option>
                                            <option>Turtle</option>
                                          </select>
                                    </div>

                                    <div class="form-row">
                                          <label for="inputState" class="">BREED</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>ITEM 1...</option>
                                            <option>Breed One</option>
                                            <option>Breed Two</option>
                                            <option>Breed Three</option>
                                          </select>
                                    </div>
                                    <hr class="mb-4">
                                     <div class="form-row">
                                        <a href="pet-pairing-result.html" style="color: inherit;text-decoration:none;">
                                            <div class="form-row">
                                            <div class="form-group col-3">
                                                <img src="images/default-user.png" class="img-fluid p-2" style="height: 100%; width: 100%;border-radius: 100%;">
                                            </div>
                                            <div class="form-group col">
                                                <p class="m-0">NAME</p>
                                                <p class="m-0">AGE</p>
                                                <p class="m-0">COLOR</p>
                                            </div>
                                             <div class="form-group col">
                                                <p class="m-0">SPECIES</p>
                                                <p class="m-0">BREED</p>
                                                <p class="m-0">HEIGHT</p>
                                            </div>
                                            </div>
                                         </a>
                                     </div>
                                     <div class="form-row">
                                        <a href="pet-pairing-result.html" style="color: inherit;text-decoration:none;">
                                            <div class="form-row">
                                            <div class="form-group col-3">
                                                <img src="images/default-user.png" class="img-fluid p-2" style="height: 100%; width: 100%;border-radius: 100%;">
                                            </div>
                                            <div class="form-group col">
                                                <p class="m-0">NAME</p>
                                                <p class="m-0">AGE</p>
                                                <p class="m-0">COLOR</p>
                                            </div>
                                             <div class="form-group col">
                                                <p class="m-0">SPECIES</p>
                                                <p class="m-0">BREED</p>
                                                <p class="m-0">HEIGHT</p>
                                            </div>
                                            </div>
                                         </a>
                                     </div>
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
