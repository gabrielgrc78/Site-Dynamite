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
<meta http-equiv="X-UA-Compatible"
	content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
	integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="refresh" content="30">
</head>
</div>

<body>

	<div class="topnav" id="navbar">
        <a href="?p=index">Home</a> <!--dont touch this-->

      	<a href=""></a>

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
        echo '<a href="?p=register" style="float: right;">Register</a>
<!--<a onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;float: right;">Sign Up</a>-->';
    }
    ?>


</div>
	<div id="id01" class="modal">

		<form class="modal-content animate" action="php/include/dologin.php"
			method="post">

			<div class="container">
				<label for="MailAD"><b>Username/email</b></label> <input type="text"
					placeholder="Enter Username or email" name="MailAD" required> <label
					for="Password"><b>Password</b></label> <input type="password"
					placeholder="Enter Password" name="Password" required>

				<button type="submit" name="login-submit">Login</button>
				<label> <input type="checkbox" checked="checked" name="remember">
					Remember me
				</label>
			</div>

			<div class="container" style="background-color: #f1f1f1">
				<button type="button"
					onclick="document.getElementById('id01').style.display='none'"
					class="cancelbtn">Cancel</button>
			</div>

		</form>

	</div>


	<script src="javascript/navbar.js">async = true;</script>
	<script src="javascript/status.js">async = true;</script>

	<script>
    async = true;
    // Get the modal
    var modal1 = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    };
    async = true;
    // Get the modal
    var modal2 = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        };
    var tunnel = document.getElementById('id03');
    window.onclick = function (event) {
        if (event.target == tunnel) {
            alert('you will now be leaving this site');
        }
    }

</script>
</body>
</html>
