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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title><?php echo $servername ?> - <?php echo $header ?></title>
<meta name="viewport" content="width=device=width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta http-equiv="refresh" content="30">
</head>
</div>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">


<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" href="?p=index">Home</a> <!--dont touch this-->
 </li>
 <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="menu" aria-haspopup="true" aria-expanded="false">Student</a>
 <div class="dropdown-menu">
<a class="dropdown-item" href="?p=student">Enrollment</a>
</div>
 </li>
 <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown"href="#" role="button" aria-haspopup="true" aria-expanded="false">Faculty</a>
 <div class="dropdown-menu">
<a class="dropdown-item" href="?p=faculty">Enrollment</a>
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
		 echo '<a class="nav-link" href="?p=login" style="float: right;">Login</a>';
		 echo '<a class="nav-link"  href="?p=register" style="float: right;">Register</a>';
 }
    ?>
</ul>
	</nav>



	<script src="javascript/navbar.js">async = true;</script>
	<script src="javascript/status.js">async = true;</script>
	<script src="javascript/sidebar.js">async = true;</script>
</body>
</html>
