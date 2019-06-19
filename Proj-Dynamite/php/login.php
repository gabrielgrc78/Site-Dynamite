<!DOCTYPE html>
<html>
<?php
//include "php/top.php";
?>
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
