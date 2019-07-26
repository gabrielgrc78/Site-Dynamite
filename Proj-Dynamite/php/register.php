<html>
<?php
//include "php/top.php";
?>
<body>


  <div style="width:400px; margin-right:220px; margin-left:220px;">
  <div class="flex-login">

  <form action="/action_page.php" method="POST">


  <p><label>
  <input name="mail" type="email" size="50" placeholder="Email" required>
  </label></p>

  <p><label>
  <input name="pwd" type="password" size="50" placeholder="Password" required>
  </label></p>

  <p><label>
  <input name="pwd-repeat" type="password" size="50" placeholder="Repeat Password" required>
  </label></p>

  <P>
  <input type="submit" name="signup-submit" value="Sign Up">

  </P>


  </form>
</div>
</div>
=======
  <div class="rectangle">
    <form action="php/include/doregister.php" method="post" >
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
