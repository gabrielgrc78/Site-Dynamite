<html>
<?php
//include "php/top.php";
?>
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
