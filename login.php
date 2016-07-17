<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- META -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="">
		<meta name="keywords" content="" />
		<meta name="copyright" content="" />
		<meta name="author" content="Anas Mazouni - https://stormix.co/">
		<meta name="robots" content="all" />
		<link rel="author" href="https://plus.google.com/+Anasmazouni_Stormix" />
		<title>Login - Inspireme</title>
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet">
		<link href="css/login.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!-- Custom -->
		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="img/favicon.png" />
		<!-- Font Awesome for footer-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		
	</head>
	<body>
		

		<!-- Sign in Form -->
		<div id="form" class="card-panel">
				<div id="success"></div>
		<div id="error"></div>
			<form id="login" method="POST" accept="multipart/form-data">
				<a href="index"><h1 class="logo">inspireme.</h1></a>
				<h4>:::  Login to your account  :::</h4>
				<div class="row">
					<div class="input-field">
						<input id="email" type="email" name="email" value="" class="validate" required>
						<label for="email" >Email</label>
					</div>
					<div class="input-field">
						<input id="password" type="password" name="password" value="" class="validate" required>
						<label for="password">Password</label>
					</div>
					<div class="col s6"><button id="submit" class="btn waves-effect waves-light custom-color-sec" type="submit" name="signin">Sign In
						<i class="material-icons right">input</i>
						</button>
					</div>
					<div class="col s6"><a class="btn waves-effect waves-light white black-text" href="register">Register</a>
				</div>
			</div>
			<div class="row">
				
				<div class="col s6">
					
					<input type="checkbox" id="remember" name="rememberMe" value="remember" />
					<label for="remember" class="remember">Remember me</label>
				</div>
				<div class="col s6">
					<a class="forgot" onclick="toggle_visibility()" href="#">Forgot password ?</a>
				</div>
			</div>
			<div class="row center-align">
				
				<h5 >Connect with</h5>
				<br>
				<ul class="social-icons icon-flat list-unstyled list-inline">
					
					<li> <a href="#"><i class="fa fa-facebook"></i></a></li>
					<li> <a href="#"><i class="fa fa-twitter"></i></a></li>
					<li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</form>
		
		<!-- reset password -->

		<form id="forgot" method="POST" accept="multipart/form-data" style="display:none">
			<a href="index"><h1 class="logo">inspireme.</h1></a>
			<div id="success"></div>
			<div id="error"></div>
			<h4>::: Reset your password  :::</h4>
			<div class="row">
				<div class="input-field">
					<input id="useremail" type="email" name="useremail" value="" class="validate" required>
					<label for="useremail" >Your Email</label>
				</div>
			</div>
			<div class="col center-align"><button id="submit" class="btn waves-effect waves-light custom-color-sec" type="submit" name="reset">Reset Password</button> <a class="btn waves-effect waves-light white black-text" href="#" onclick="toggle_visibility()">Login</a></div>
		</form>
	</div>
	<!-- Include jQuery -->
	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script>
		function toggle_visibility() {
			$("#login").fadeToggle();
			$("#forgot").fadeToggle();
		}
		// redirect to a specific location
		function redirect(location) {
			window.location = location;
		}
		//Clone email into both forms -> helps users a lot
		$("#email").change(function() { // When the email is changed
		    $('#useremail').val($('#email').val()); // copy it over to the useremail
		});
		// Ajax form
		$('#login').on('submit', function(e)
		{
			e.preventDefault();
			var email = $('#email').val();
			var password = $('#password').val();
			if ($('#remember').is(":checked"))
				{
					var rememberMe = 'true'; 
				}else{
					var rememberMe = 'false';
				}
			$.ajax({
				url: '/auth/login', // replace with your php file URI
				type: 'POST',
				data: {email: email, password: password, remember: rememberMe}, 
				success :  function(response)
					{
						if(response=="ok"){
							$("#submit").html('Signing In ...');						
							$('#error').remove();
							$('#success').fadeIn().html('You have successfully signed in !');
							setTimeout(' window.location.href = "index.php"; ',4000);
						}
						else{
							$("#error").fadeIn(1000, function(){
								$("#error").html(response); 
							});
						}
					}
			});
		});

		$('#forgot').on('submit', function(e)
		{
			e.preventDefault();
			var email = $('#useremail').val(); 
			$.ajax({
				url: '/auth/forgot', // replace with your php file URI
				type: 'POST',
				data: {email: email}, 
				success :  function(response)
					{
						if(response=="ok"){
							$('#success_reset').fadeIn().html('An email was sent to you to reset your password.<br>Please check your inbox.');
						}
						else{
							$("#error_reset").fadeIn(1000, function(){
								$("#error_reset").html(response); 
							});
						}
					}
			});
		});
	</script>
</body>
</html>