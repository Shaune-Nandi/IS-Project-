<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" href="./../logo/favicon.ico" type="image/ico">
	<title>Reset Password</title>

	<style>
		.form-control {
			min-width: 300px;
		}

		.btn {
			min-width: 300px;
		}

		.row {
			min-height: 250px;
		}
	</style>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="./../home/home.php">
			<img src="./../logo/logo.png" class="img-fluid" width="30px"><strong>Strath Café</strong>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="./../home/home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacts</a>
				</li>
			</ul>

			<?php
			if (isset($_SESSION['loggedin'])) {
				echo '        
			  <ul class="nav navbar-nav">
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="fas fa-user"></i><strong> ' . $_SESSION['FirstName'] . " " . $_SESSION['LastName'] . ' - ' . $_SESSION['AdmissionNumber'] . '</strong></span>
				  </a>
				  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="./../authentication/profile.php">View Profile</a>
					<a class="dropdown-item" href="./../authentication/logout.php">Logout</a>
				  </div>
				</li>
			  </ul>
			  ';
			} else {
				echo '
			  <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" href="./../registration/registration.html">Register</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="./../authentication/login.html">Login</a>
				</li>
			  </ul>
			  ';
			}
			?>
		</div>
	</nav>


	<div class="container rounded border border-dark" style="margin-top:50px; margin-bottom:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-1 bg-primary">
				</div>
				<div class="col-md-11">
					<form action="./../authentication/forgot_password_process.php" method="post">
						<h1>Password Reset</h1><br>
						<div class="form-group">
							<label for="Email">Email</label>
							<input class="form-control" type="email" name="Email" placeholder="eg. johndoe@gmail.com" id="Email" required>
						</div>
						<br>
						<div class="form-group text-center">
							<button class="btn btn-primary" type="submit" value="password_reset" name="password_reset">OK</button>
						</div>
						<br>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>