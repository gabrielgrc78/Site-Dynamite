<html>
<?php
//include "top.php";
?>
<!--<head>
    <meta charset="UTF-8">
    <link href="../css/normalize.css">
    <link href="../css/style.css">
    <title>Registration</title>
    <meta name="description" content="The Registration page">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1"
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=5; IE=EDGE; chrome=1">
</head>-->
<body>
<main>
    <fieldset>
        <h1>Sign up</h1>
        <form action="php/include/doregister.php" method="post">
            <input type="text" name="uid" placeholder="username" required>
            <input type="text" name="mail" placeholder="email" required>
            <input type="password" name="pwd" placeholder="password" required>
            <input type="password" name="pwd-repeat" placeholder="repeat password" required>
            <button type="submit" name="signup-submit">Sign up</button>
        </form>
    </fieldset>
</main>
</body>
</html>