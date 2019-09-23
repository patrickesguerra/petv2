<?php 
session_start();
require_once("connection.php"); ?>
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
        <div id="sidebar-wrapper" style="width: 500px;background: linear-gradient(to bottom, #87e0fd 0%,#53cbf1 40%,#4da7c3 100%);">
            <img src="images/logo/logo-three.png" class="img-fluid mx-auto d-block" style="height: 300px;">
             <div class="col ">
                   <form id="loginform" class=" p-4" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="text-white">Email</label>
                        <input type="text" class="form-control" name="user_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="text-white">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <center>
                      <input type="submit" class="btn btn-custom-one" value="Login" name="login"><br>
                      <p class="text-white mt-4">No account yet?  <a href="register.php" style="cursor: pointer;"><strong>Sign Up</strong></a></p>
                    <!--   <button type="submit" class="btn btn-custom-one">REGISTER</button> -->
                      </center>
                     
                    </form>

<?php
if(isset($_POST['login'])){
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	
	$q='SELECT * FROM `users` WHERE `user_name`="'.$user_name. '" AND `password`="'.$password.'"';
	$r=mysqli_query($con,$q);
	if($r){
		if(mysqli_num_rows($r)>0){
      $_SESSION['username']=$user_name;
			header("location:index1.php");
		}
		else{
			echo 'Your password and user name did not match';
		}
	}
	else{
		echo $q;
	}
}
?>
                   <form id="registerform" class="p-4" style="display: none;">
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="text-white">Name</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                      </div>
                      <div class="form-group">
                         <label for="exampleInputEmail1" class="text-white">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="text-white">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                       <div class="form-group">
                        <input type="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="Comfrim Password">
                      </div>
                      <center>
                      <!-- <button id="backLogin" type="submit" class="btn btn-custom-one" her>BACK</button> -->
                      <button id="proceedRegister" type="submit" class="btn btn-custom-one">SIGN UP</button>
                      </center>
                     
                    </form> 

                    <form id="registerSuccess" class="mx-auto p-5" style="display:none;">
                        <CENTER>
                        <i class="fa fa-check-circle text-white" style="font-size: 70px;"></i>
                        <h2 style="color: #f62a0d;">CONGRATULATIONS!</h2>
                        <p class="text-white">You've successfully signed up! Do you want to register your pet now?</p>
                        <button id="proceedRegisterPet" type="submit" class="btn btn-custom-one">SURE!</button>
                         <button id="backLogin" type="submit" class="btn btn-custom-one">LATER...</button>
                        </CENTER>
                    </form> 

                     <form id="registerPet" class="p-4" style="display: none;">
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="text-white">Pet Name</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                      </div>
                      <div class="form-row">
                             <div class="form-group col-md-6">
                              <label for="inputState" class="text-white">SPECIES</label>
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
                            <div class="form-group col-md-4">
                              <label for="inputState" class="text-white">BREED</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Breed One</option>
                                <option>Breed Two</option>
                                <option>Breed Three</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip" class="text-white">Age</label>
                              <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>

                      <center>
                     <!--  <button id="backLogin" type="submit" class="btn btn-custom-one">BACK</button> -->
                      <button id="successPetRegister" type="submit" class="btn btn-custom-one">REGISTER</button>
                      </center>
                     
                    </form> 

                     <form id="registerPetSuccess" class="mx-auto p-5" style="display:none;">
                        <CENTER>
                        <i class="fa fa-check-circle text-white" style="font-size: 70px;"></i>
                        <h2 style="color: #f62a0d;">CONGRATULATIONS!</h2>
                        <p class="text-white">You've successfully register your pet.</p>
                           <button id="backLogin" type="submit" class="btn btn-custom-one">LOG IN NOW</button>
                          <!--  <button id="backRegisterPet" type="submit" class="btn btn-custom-one">BACK</button> -->
                        </CENTER>
                    </form> 

              </div>




            <p class="text-center text-white px-4" style="font-size: 12px;">Curabitur in sapien tristique neque ullamcorper facilisis sit amet eu lacus. Mauris convallis aliquet nibh, at placerat ipsum euismod vitae. Mauris volutpat libero non sollicitudin sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla ornare luctus quam quis accumsan.</p>       

            <p class="text-center text-white" style="font-size: 12px;">@ 2018 PETNER. All rights reserved.</p>
        </div>
        <!-- /#sidebar-wrapper -->
         <div id="page-content-wrapper" class="loginpage">
            
         </div>


    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#Register").click(function(e) {
         e.preventDefault();
        $("#loginform").hide();
        $("#registerform").show();
        $("#registerSuccess").hide();
    });

    $("#backLogin").click(function(e) {
         e.preventDefault();
        $("#loginform").show();
        $("#registerform").hide();
        $("#registerSuccess").hide();
    });

    $("#proceedRegister").click(function(e) {
         e.preventDefault();
        $("#registerSuccess").show();
        $("#loginform").hide();
        $("#registerform").hide();

    });
     $("#proceedRegisterPet").click(function(e) {
         e.preventDefault();
        $("#registerSuccess").hide();
        $("#loginform").hide();
        $("#registerform").hide();
        $("#registerPet").show();
      
    });
    
    $("#successPetRegister").click(function(e) {
         e.preventDefault();
        $("#registerSuccess").hide();
        $("#loginform").hide();
        $("#registerform").hide();
        $("#registerPet").hide();
        $("#registerPetSuccess").show(); 
      
    });



    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
