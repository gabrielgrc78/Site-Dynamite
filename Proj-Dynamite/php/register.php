<html>
<?php
//include "php/top.php";
?>
<body>
<main>
    <fieldset class="rectangle">
        <h1>Sign up</h1>
        <form action="php/include/doregister.php" method="post" >
            <input type="email" class="inputfield" name="mail" placeholder="email" required>
            <br><br><br>
            <input type="password" class="inputfield" name="pwd" placeholder="password" required>
            <br><br><br>
            <input type="password" class="inputfield" name="pwd-repeat" placeholder="repeat password" required>
            <br><br><br>
            <button type="submit" class="submit-mdn" name="signup-submit">Sign up</button>
        </form>
    </fieldset>
</main>
</body>
</html>
