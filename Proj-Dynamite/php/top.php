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
<link rel="stylesheet" href="css/modal.css">
<title><?php echo $servername ?> - <?php echo $header ?></title>
<meta name="viewport" content="width=device=width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
<meta http-equiv="refresh" content="30">
</head>
</div>

<body>

	<div class="topnav" id="navbar">
        <a href="?p=index">Home</a> <!--dont touch this-->

      	<a href="">haha</a>

    <?php
    if (isset($_SESSION['userid'])) {

        echo '<div class="dropdown" style="float:left;" >
              <a class="dropbtn">Admin Tools</a>
              <div class="dropdown-content">
              <a href="?p=test">Test Connection</a>
              <a href="?p=serverstatus">Server Status</a>

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
    } else {
        echo '<a onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;float: right;">Login</a>';
        echo '<a href="?p=register" style="float: right;">Register</a>';
    }
    ?>





	<script src="javascript/navbar.js">async = true;</script>
	<script src="javascript/status.js">async = true;</script>

	<script>
</script>
</body>
</html>
