<?php
session_start();
include("db_connect.php");

if(isset($_POST['register'])){
	
	$username=$_POST['username'];
	$pwd=$_POST['password'];
	$name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
	$access=3;
	$status=1;
	
	$qrystr="INSERT INTO users (username,password,name,email,phone,access,status) VALUES('$username','$pwd','$name','$email','$phone','$access','$status')";
	$exec=mysqli_query($db, $qrystr);
	if(mysqli_affected_rows($db)>0){
		?>
 	<script>alert("Registration Successful!");
    //window.location="";
    </script>

	<?php

    } else{
        ?>
    <script>alert("Registration Failed, please try again!");
    //window.location="";
    </script>
    <?php
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Phonebook - Sign Up/Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body  class="bg-secondary text-white">
	


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">PHONEBOOK</h1>
                <!-- Login Form -->
                <div class="card mb-4" id="login">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form action="index.php" method="post" id="login">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="username" required="required" placeholder="Username" id="username">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" name="password" required="required" placeholder="Password" id="password">
                            </div>
                            <div class="text-center">
                                <input type="reset" class="btn btn-secondary me-2">
                                <input type="submit" class="btn btn-primary" name="submit" value="Login">
                            </div>
                        </form>
												
                    </div>
                </div>
                <!-- Registration Form -->
                <div class="card" id="register">
                    <div class="card-body">
                        <h2 class="card-title text-center">Register</h2>
                        <form action="index.php" method="post" id="register">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="username" required="required" placeholder="Username" id="username">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="password"  name="password" required="required" placeholder="Password" id="password2">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="password"  name="verifypassword" required="required" placeholder="Re-enter Password" id="verifypassword">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text"  name="name" required="required" placeholder="Full Name" id="name">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="email"  name="email" required="required" placeholder="Email" id="email">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text"  name="phone" required="required" placeholder="Phone" id="phone">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success" name="register" value="Register" id="register">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
