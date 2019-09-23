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
                    <a href="user-change-profile.html">CHANGE PROFILE</a>
                </li>
                 <li>
                    <a href="user-add-pet.html">ADD A PET</a>
                </li> 
                <li>
                    <a href="user-edit-pet-database.html">EDIT PET DATABASE</a>
                </li> 
                <li>
                      <a href="change-password.html">CHANGE PASSWORD</a>
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
                           
                          
                            <div class="editProfile mx-2" >
                                
                                
                                 <form id="registerform" class="p-3">
                                       
                                        <div class="form-group">
                                             <center>
                                                   <img src="images/default-user.png" class="img-fluid" style="height: 100px; width: 100px;border-radius: 100%;">
                                                   <input type="file" class="form-control-file mt-1" id="exampleInputFile" aria-describedby="fileHelp">
                                            </center>
                                        </div>

                                        <div class="form-row">
                                             <div class="form-group col" >
                                                <label for="exampleInputEmail1" class="">Name</label>
                                                <input type="name" class="form-control">
                                              </div>
                                              <div class="form-group col-sm-4">
                                                <label for="exampleInputEmail1" class="">Color</label>
                                                <input type="name" class="form-control">
                                              </div>
                                        </div>
                                        <div class="form-row">
                                             <div class="form-group col">
                                                  <label for="exampleInputEmail1" class="">Height</label>
                                                   <input type="name" class="form-control">
                                            </div>
                                             <div class="form-group col-sm-4">
                                                    <label for="exampleInputEmail1" class="">Age</label>
                                                    <input type="name" class="form-control">
                                             </div>


                                      </div>
                                       <div class="form-group">
                                        <label for="exampleInputPassword1" class="">Species</label>
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
                                        <label for="exampleInputPassword1" class="">Breed</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Breed One</option>
                                            <option>Breed Two</option>
                                            <option>Breed Three</option>
                                          </select>
                                      </div>
                                       
                                       <div class="form-row">
                                             <div class="form-group col-md-6">
                                                <a href="user-edit-pet-database.html" class="btn btn-custom-one mt-2" style="width: 160px;">CANCEL CHANGES</a>
                                            </div>
                                            <div class="form-group col-md-6">
                                                 <a href="user-edit-pet-database.html" class="btn btn-custom-one mt-2" style="width: 160px;">SAVE CHANGES</a>
                                            </div>

                                        </div>
                                        
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
