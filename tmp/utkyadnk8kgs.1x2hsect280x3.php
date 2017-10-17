<!DOCTYPE html>
<!--
 	Author: Duck Nguyen
 	Date: 17/17/17
 	Filename: admin-signup.html
 	Description: Admin sign-up page
 -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Admin Sign Up | Cascadian Landworks</title>
	
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!-- Our Custom CSS -->
	<link rel="stylesheet" type="text/css" href="./css/admin-signup.css">
</head>
 
<body>

	<div class="container">
        <div class="card card-container">
			
			<div class="row">
				<img class="card-img-top" src="./images/cascadian-landworks.png">
			</div>
			
            <form id="admin-signup" class="form-signup" action="./admin" method="post" autocomplete="on">
				
				<h3 class="text-center">Become an Admin</h3>
				
                <!-- FIRST NAME SECTION + ERROR MESSAGE -->
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" autofocus required>
                <!--
				<div class="alert alert-danger">
					<strong>Error:</strong> <span id="firstNameError"></span>
				</div>
                -->
				
                <!-- EMAIL SECTION + ERROR MESSAGE -->
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                <!--
				<div class="alert alert-danger">
					<strong>Error:</strong> <span id="emailError"></span>
				</div>
                -->
				
                <!-- PASSWORD SECTION + ERROR MESSAGE -->
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				<!--
                <div class="alert alert-danger">
					<strong>Error:</strong> <span id="passwordError"></span>
				</div>
				-->
				
                <!-- PASSWORD VERIFY + ERROR MESSAGE -->
                <input type="password" class="form-control" id="verify" name="verify" placeholder="Verify password" required>
				<!--
                <div class="alert alert-danger">
					<strong>Error:</strong> <span id="verifyError"></span>
				</div>
				-->
               
			   <!-- SIGNUP BUTTON -->
                <input class="btn btn-lg btn-primary btn-block btn-signup" name="action" id="submit" type="submit" value="Sign up">
                </input>
				
            </form>
			
        </div><!-- /card-container -->
    </div>
	
 	<!-- JQUERY CDN -->
 	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 
 	<!-- BOOTSTRAP JS CDN -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	
 	<!-- FONT AWESOME -->
 	<script src="https://use.fontawesome.com/a516aa6fdc.js"></script>
</body>
</html>