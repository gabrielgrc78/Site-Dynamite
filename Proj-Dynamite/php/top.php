<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<div>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/registration.css"
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/Login.css">
<link rel="stylesheet" type="text/css" href="css/sign up.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">

<title><?php echo $servername ?> - <?php echo $header ?></title>
<meta name="viewport" content="width=device=width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta http-equiv="refresh" content="30">
</head>
</div>

<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand">Registration Application</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="?p=index">Home</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="?p=student">Enrollment</a></li>
</ul>
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Faculty <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="?p=faculty">Enrollment</a></li>
</ul>
</li>

<ul class="nav navbar-nav navbar-right">

<<<<<<< HEAD
=======
  <ul>
    <li><a href="?p=index">Home</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Student</a>
    <div class="dropdown-content">
      <a href="?p=student">Enrollment</a>
    </div>
  </li>
>>>>>>> 47b5623009d52750adada54c92fc15911647bfeb

    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Faculty</a>
        <div class="dropdown-content">
          <a href="?p=faculty">Enrollment</a>
        </div>
      </li>



    <?php
		$active = $_SESSION['active'];
		$level = $_SESSION['userauth'];



    if ($level == Admin) {

        echo '<div class="dropdown" style="float:left;" >
              <a class="dropbtn">Admin Tools</a>
              <div class="dropdown-content">
              <a href="#">User Account Controls</a>


              </div>
              </div>';

         echo '<div class="dropdown" id  >
                <a class="dropbtn">User:' . $_SESSION['useruid'] . '</a>
                <div class="dropdown-content">
                <form action="php/include/dologout.php" method="post" >
                <button type="submit" name="logout-submit" class="lg">Logout</button>
                </form>
                </div>
                </div>';
    } elseif ($level == Faculty) {
			echo '<div class="dropdown" id  >
							<a class="dropbtn">User:' . $_SESSION['useruid'] . '</a>
							<div class="dropdown-content">
							<form action="php/include/dologout.php" method="post" >
							<button type="submit" name="logout-submit" class="lg">Logout</button>
							</form>
							</div>
							</div>';
    } elseif ($level == Student) {
			echo '<div class="dropdown" id  >
							<a class="dropbtn">User:' . $_SESSION['useruid'] . '</a>
							<div class="dropdown-content">
							<form action="php/include/dologout.php" method="post" >
							<button type="submit" name="logout-submit" class="lg">Logout</button>
							</form>
							</div>
							</div>';
    }

	else {
    echo '<li><a href="?p=register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
		echo '<li><a href="?p=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';

 }
    ?>
  </ul>
  </div>
  </nav>



	<script src="javascript/navbar.js">async = true;</script>
	<script src="javascript/status.js">async = true;</script>
	<script src="javascript/sidebar.js">async = true;</script>
</body>
</html>
