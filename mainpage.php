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
	<div id="bg-layer">
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
			
				<li><a href="profile.php">Profile</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="#">Contact</a></li>
				<li class="active"><a href="#">My Notes</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#loginModal" data-toggle="modal">Logged in as <b>Username</b></a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
	
	<div class="container" id="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="buttons">
				<button id="addNote" class="btn btn-lg btn-info" type="button">Add note</button>
				<button id="editNote" class="btn btn-lg btn-info pull-right" type="button">Edit</button>
				<button id="done" class="btn btn-lg btn-sucess pull-right" type="button">Done</button>
				<button id="allNotes" class="btn btn-lg btn-info" type="button">All Notes</button>	
			</div> <!-- buttons div -->
			
			<div id=notePad>
				<textarea name="" id="" cols="30" rows="10"></textarea>
			</div> <!-- text area div -->
			
			
			<div class="notes" id="notes">
				<!-- ajax call to php file -->
			</div>
		</div>
	</div>
	
	</div>
	
	</div>
	
	<footer>
		<div class="container">
			<p>Created by Kevin Napier Copyright &copy; <?php $date = date("Y"); echo $date ?>.</p>
		</div>
	</footer>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>
















