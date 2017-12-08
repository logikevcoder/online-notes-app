<!doctype html>
<html>
	<head>
		<title>Profile</title>
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
			<a href="index.php" class="navbar-brand">Notes App</a>
			<button type="button" class="navbar-toggle" data-target="#navCollapse" data-toggle="collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="navCollapse">
			<ul class="nav navbar-nav">
			
				<li class="active"><a href="">Profile</a></li>
				<li><a href="">Help</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="mainpage.php">My Notes</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#loginModal" data-toggle="modal">Logged in as <b>Username</b></a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
	
	<div class="container" id="profileContainer">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h2>Account Settings:</h2>	
				<div class="table-responsive">
					<table class="table table-hover table-condensed">
						<tr data-target="#updateUserName" data-toggle="modal">
							<td>Username</td>
							<td>value</td>
						</tr>
						<tr data-target="#updateEmail" data-toggle="modal">
							<td>Email</td>
							<td>value</td>
						</tr>
						<tr data-target="#updatePassword" data-toggle="modal">
							<td>Password</td>
							<td>hidden</td>
						</tr>
					</table>
				</div>
			</div> <!-- col-md-6 -->
		</div> <!-- row -->
	</div> <!-- container -->
	
	<!-- Update Username -->
	<form action="POST" id="updateUsernameForm">
		<div class="modal" id="updateUserName" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<!-- modal title -->
						<h4 id="myModalLabel">
							Edit Username
						</h4>
					</div> <!-- modal header -->
					<div class="modal-body">
						<div class="form-group">
							<label for="username">Username: </label>
							<input type="text" name="username" class="form-control" id="username" maxlength="30" value="">
						</div>
					</div> <!-- modal body -->
					<div class="modal-footer">
						<!-- update button -->
						<input class="btn btn-success" name="updateUsername" type="submit" value="Update">
						<!-- cancel button -->
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
					</div> <!-- modal footer -->
				</div> <!-- modal content -->
			</div> <!-- modal dialogue -->
		</div>
	</form>
	
		<!-- Update Email -->
	<form action="POST" id="updateEmailForm">
		<div class="modal" id="updateEmail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<!-- modal title -->
						<h4 id="myModalLabel">
							Edit Email
						</h4>
					</div> <!-- modal header -->
					<div class="modal-body">
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" name="email" class="form-control" id="email" maxlength="30">
						</div>
					</div> <!-- modal body -->
					<div class="modal-footer">
						<!-- Update button -->
						<input class="btn btn-success" name="update" type="submit" value="Update">
						<!-- Cancel button -->
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
					</div> <!-- modal footer -->
				</div> <!-- modal content -->
			</div> <!-- modal dialogue -->
		</div>
	</form>
	
		<!-- Update Password -->
	<form action="POST" id="updatePasswordForm">
		<div class="modal" id="updatePassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<!-- modal title -->
						<h4 id="myModalLabel">
							Enter current and new Password
						</h4>
					</div> <!-- modal header -->
					<div class="modal-body">
						<div class="form-group">
							<label for="currentPassword" class="sr-only"></label>
							<input type="password" name="currentPassword" class="form-control" id="currentPassword" maxlength="30" placeholder="Current password">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Choose a password: </label>
							<input type="password" name="password" class="form-control" id="password" maxlength="30" placeholder="Choose a password">
						</div>
						<div class="form-group">
							<label for="password2" class="sr-only">Confirm password: </label>
							<input type="password" name="username2" class="form-control" id="password2" maxlength="30" placeholder="Confirm password">
						</div>
					</div> <!-- modal body -->
					<div class="modal-footer">
						<!-- Update button -->
						<input class="btn btn-success" name="update" type="submit" value="Update">
						<!-- Cancel button -->
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
		<div class="container">
			<p>Created by Kevin Napier Copyright &copy; <?php $date = date("Y"); echo $date ?>.</p>
		</div>
	</footer>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>
















