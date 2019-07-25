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
<link rel="stylesheet" type="text/css" href="css/sign up.css">
<link rel="stylesheet" type="text/css" href="css/Login.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
<title><?php echo $servername ?> - <?php echo $header ?></title>
<meta name="viewport" content="width=device=width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">


<meta http-equiv="refresh" content="30">
</head>
</div>

<body>
  <ul>
    <li><a href="?p=index">Home</a></li>

  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Student</a>
  <div class="dropdown-content">
    <a href="?p=student">Enrollment</a>
  </div>
</li>

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
      echo '<li style="float:right"><a  href="?p=login">Login</a></li>';
  		echo '<li style="float:right"><a  href="?p=register">Sign up</a></li>';


   }
      ?>
</ul>


	<script src="javascript/navbar.js">async = true;</script>
	<script src="javascript/status.js">async = true;</script>
	<script src="javascript/sidebar.js">async = true;</script>
</body>
</html>
