<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script src="jquery.js"></script>
<link href='https://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>
<!-- Required meta tags -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="icon" href="./../logo/favicon.ico" type="image/ico">
  <title>Pate Cafeteria</title>

    <style>
        .form-control{min-width: 300px;}
        .btn{min-width: 300px;}
        .row{min-height:400px;}
        .row{min-height:400px;}
        .container{margin-top:50px; margin-bottom:50px;}

div {
  background-size: cover;
  position: relative;
  margin: 50px 0 0 0;
  border-radius: 12px;
}
h1 {
  font-family: 'Londrina Shadow', cursive;
  text-align: center;
  font-size: 75px;
  color: #000000;
  margin: 60px 0 0 0;
}
h2 {
  text-align: center;
  color: #000000;
  margin: 0px 0 70px 0;
}

p {
  color: rgba(255,255,255,1);
  background: black;
  background: linear-gradient(bottom, rgba(0,0,0,1), rgba(0,0,0,.4));
  background: -webkit-linear-gradient(bottom, rgba(0,0,0,1), rgba(0,0,0,.4));
  background: -moz-linear-gradient(bottom, rgba(0,0,0,1), rgba(0,0,0,.4));
  padding: 10px;
  line-height: 28px;
  text-align: justify;
  position: absolute;
  bottom: 0;
  margin: 0;
  height: 30px;
  transition: height .5s;
  -webkit-transition: height .5s;
  -moz-transition: height .5s;
}

small {
  opacity: 0;
}

.show-description p {
  height: 150px;
}

.show-description small {
  opacity: 1;
}

.first{
  background-image: url("http://dash.ga.co/assets/firstcourse.jpg");
}
.second{
  background-image: url("http://dash.ga.co/assets/secondcourse.jpg");
}
.dessert{
  background-image: url("http://dash.ga.co/assets/dessertcourse.jpg");
}
.price {
  float: right;
}
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
  
<h1><b>Pate Cafeteria</b></h1>
<h2>Cafeteria near the university auditorium</h2>

</body>
</html>