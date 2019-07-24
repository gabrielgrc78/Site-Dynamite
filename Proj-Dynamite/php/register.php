<html>
<?php
//include "php/top.php";
?>
<body>

  <div class="rectangle">
    <form action="/action_page.php">
      <label for="email">Email</label>
      <input type="text" id="email" name="mail" placeholder="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="pwd" placeholder="password" required>

      <label for="repeat password">Repeat Password</label>
      <input type="password" id="pwd-repeat" name="pwd-repeat" placeholder="repeat password">

      <button type="submit" name="signup-submit">Sign up</button>
    </form>
  </div>

</body>
</html>
