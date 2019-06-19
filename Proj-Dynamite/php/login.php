<!DOCTYPE html>
<html>
<?php
//include "php/top.php";
?>
<head>
    <meta charset="UTF-8">
   <!-- <meta name="viewport" content="width=device=width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript/navbar.js"></script>
    <script src="javascript/status.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Login</title>
    <meta name="description" content="The Login page">

</head>
<body>
<fieldset>
<h1>Login</h1>
    <form action="php/include/dologin.php" method="post">
        <input type="text" name="MailAD" placeholder="username/E-mail...">
        <input type="password" name="Password" placeholder="password here...">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="?p=register">Signup</a>
</fieldset>
</body>
<?php
include "bottom.php";
?>
</html>