<!doctype html>
<html>
	<head>
		<title>My Notes</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/app.css">
		<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	</head>

	<body>
<!--============ NAVBAR =============-->
<nav class="navbar navbar-custom navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Notes App</a>
			<button type="button" class="navbar-toggle" data-target="#navCollapse" data-toggle="collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="navCollapse">
			<ul class="nav navbar-nav">
			
				<li><a href="">Profile</a></li>
				<li><a href="">Help</a></li>
				<li><a href="">Contact</a></li>
				<li class="active"><a href="">My Notes</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#loginModal" data-toggle="modal">Logged in as <b>Username</b></a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
	
	<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6"></div>
	</div>
	
	</div>
	
	<!-- Signup Form -->
	<form action="POST" id="signupform">
		<div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 id="myModalLabel">
							Signup today and start creating notes!
						</h4>
					</div> <!-- modal header -->
					<div class="modal-body">
						<!-- Signup message from php file -->
						<div id="signupMessage">
							
						</div>
						<div class="form-group">
							<placeholder class="sr-only" for="username">Username: </placeholder>
							<input type="text" name="username" placeholder="Username" class="form-control" id="username" maxlength="30">
						</div>
						<div class="form-group">
							<placeholder class="sr-only" for="email">Email: </placeholder>
							<input type="email" name="email" placeholder="Email Address" class="form-control" id="email" maxlength="30">
						</div>
						<div class="form-group">
							<placeholder class="sr-only" for="password">Password: </placeholder>
							<input type="password" name="password" placeholder="Choose a password" class="form-control" id="password" maxlength="30">
						</div>
						<div class="form-group">
							<placeholder class="sr-only" for="password2">Password: </placeholder>
							<input type="password" name="password2" placeholder="Confirm Password" class="form-control" id="password2" maxlength="30">
						</div>
					</div> <!-- modal body -->
					<div class="modal-footer">
						<input class="btn btn-success" name="signup" type="submit" value="Sign Up">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
					</div> <!-- modal footer -->
				</div> <!-- modal content -->
			</div> <!-- modal dialogue -->
		</div>
	</form>
	
		<!-- Login Form -->
	<form action="POST" id="loginForm">
		<div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 id="myModalLabel">
							Login:
						</h4>
					</div> <!-- modal header -->
					<div class="modal-body">
						<!-- Login message from php file -->
						<div id="signupMessage">
						</div>
						
						<div class="form-group">
							<placeholder class="sr-only" for="loginEmail">Email: </placeholder>
							<input type="email" name="loginEmail" placeholder="Email Address" class="form-control" id="loginEmail" maxlength="30">
						</div>
						
						<div class="form-group">
							<placeholder class="sr-only" for="loginPassword">Password: </placeholder>
							<input type="password" name="loginPassword" placeholder="Enter password" class="form-control" id="loginPassword " maxlength="30">
							
							<div class="checkbox">
								<label>
									<input type="checkbox" name="rememberme" id="rememberme">
									Remember me
								</label>
								<a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotPwModal" data-toggle="modal">
										Forget password?
									</a>
							</div> <!-- checkbox -->
						</div> <!-- form group -->
					</div> <!-- modal body -->
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary pull-left" name="register" value="Register" data-target="#signupModal" data-toggle="modal">
						<input class="btn btn-success" name="signup" type="submit" value="Login">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
					</div> <!-- modal footer -->
				</div> <!-- modal content -->
			</div> <!-- modal dialogue -->
		</div>
	</form>
	
	<!-- Forgot Password Form -->
	<form action="POST" id="forgotPwForm">
		<div class="modal" id="forgotPwModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 id="myModalLabel">
							Forgot password? Enter your email address
						</h4>
					</div> <!-- modal header -->
					<div class="modal-body">
						<!-- Login message from php file -->
						<div id="forgotPwMessage">
						</div>
						<div class="form-group">
								<placeholder class="sr-only" for="loginEmail">Email: </placeholder>
								<input type="email" name="loginEmail" placeholder="Email Address" class="form-control" id="loginEmail" maxlength="30">
						</div> <!-- form group -->
					</div> <!-- modal body -->
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary pull-left" name="register" value="Register" data-target="#signupModal" data-toggle="modal">
						<input class="btn btn-success" name="signup" type="submit" value="Submit">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
					</div> <!-- modal footer -->
				</div> <!-- modal content -->
			</div> <!-- modal dialogue -->
		</div>
	</form>
	
	<footer>
		<p>Created by Kevin Napier Copyright &copy; <?php $date = date("Y"); echo $date ?>.</p>
	</footer>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>
















