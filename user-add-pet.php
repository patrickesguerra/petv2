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
           <p class="page-title" style="padding-left: 10px;">ADD PET</p>
        </header>


        <!-- Header Content -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="mobile-wrap" style="padding:0px;">
                           
                          
                            <div class="editProfile m-2" >
                                <p class="text-center"><strong>Add a pet to increase your pet family</strong></p>
                                 <form id="registerform" class="p-4">
                                        <div class="form-row">
                                             <div class="form-group col">
                                                   <label for="exampleInputEmail1" class="">Name</label>
                                                   <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-md-2">
                                                 <label for="exampleInputEmail1" class="">Age</label>
                                                 <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                            </div>

                                        </div>

                                      <div class="form-group">
                                       
                                      </div>
                                       <div class="form-group">
                                         <label for="inputState" class="">SPECIES</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Dog</option>
                                            <option>Cat</option>
                                            <option>Bird</option>
                                            <option>Rodent</option>
                                            <option>Spider</option>
                                            <option>Turtle</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputState" class="">BREED</label>
                                              <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Breed One</option>
                                                <option>Breed Two</option>
                                                <option>Breed Three</option>
                                              </select>
                                      </div>
                                     

                                      <center>
                                         <button type="submit" class="btn btn-custom-one mt-2" style="width: 160px;">REGISTER</button>
                                      </center>

                                    </form> 
                            
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
