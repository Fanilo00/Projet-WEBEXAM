<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>Assets/Loginstyle/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url();?>Assets/Loginstyle/images/Back.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">LOGIN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="<?php echo base_url('LOGIN/log');?>" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Mot de passe" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<a href="<?php echo base_url('INSCRIT/forminscrit');?>"><button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button></a>
	            </div>
	            
                </form>
	          <div class="social d-flex text-center">
	          	<a href="<?php echo base_url('INSCRIT/forminscrit');?>" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Sign Up</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url();?>Assets/Loginstyle/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>Assets/Loginstyle/js/popper.js"></script>
  <script src="<?php echo base_url();?>Assets/Loginstyle/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>Assets/Loginstyle/js/main.js"></script>

	</body>
</html>