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
		<title>Register - Inspireme</title>
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
		
		<div id="success"></div>
		<div id="error"></div>
		<!-- Sign in Form -->
		<div id="form" class="card-panel">
			<a href="index"><h1 class="logo">inspireme.</h1></a>
			<h4>:::  Create a new account  :::</h4>
			<form action="" method="POST" accept="multipart/form-data">
				<div class="row">
					<div class="input-field col s6">
						<input  id="first_name" type="text" class="validate" required>
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate" required>
						<label for="last_name">Last Name</label>
					</div> 
					<div class="input-field col s12">
						<input id="username" type="text" name="username" value="" class="validate" required>
						<label for="username" >Username</label>
					</div>
					<div class="input-field col s12">
						<input id="email" type="email" name="email" value="" class="validate" required>
						<label for="email" >Email</label>
					</div>
					<div class="input-field col s12">
						<input id="password" type="password" name="password" value="" class="validate" required>
						<label for="password">Password</label>
					</div>			<div class="col s12">
					
					<input type="checkbox" id="remember" />
					<label for="remember" class="remember">I Agree to the  <a onclick="$('#terms').openModal();" href="#terms">Terms and Conditions</a> set out by this site, including the Cookie Use.</label>
				</div>
			</div>
			<div class="row center-align">
				<div class="col s7 center-align">
					<button class="btn waves-effect waves-light custom-color-sec" type="submit" name="action">Register 
					<i class="material-icons right">perm_identity</i>
					</button>
				</div>
				<div class="col s5 center-align"><a class="btn waves-effect waves-light white black-text" href="login">Login</a>
			</div>
		</div>
		
	</form>
</div>
<div id="terms" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Terms of use : </h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Disagree</a>
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
	</div>
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script>
	// redirect to a specific location
	function redirect(location) {
		window.location = location;
	}
	// Ajax form
	$('#form form').on('submit', function(e)
	{
		e.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		$.ajax({
			url: '/auth/login', // replace with your php file URI
			type: 'POST',
			data: {username: username, password: password},
			cache: false,
			success: function (data) {
				$('#error').remove();
				$('#success').fadeIn().html(data);
				setTimeout(function () {
					redirect('/'); // redirect after 4 seconds to the home page (or any page)
				}, 4000);
			},
// to get errors, add http_response_code(401) before you echo the errors in your php file
			error: function (xhr, status, error) {
				var errors = $.parseJSON(xhr.responseText);
				$('#error li').remove();
				$.each(errors, function(i, error) {
					$('#error').prepend('<li>' + error + '</li>');
					$('#error').fadeIn();
				});
			},
		});
	});
</script>
</body>
</html>