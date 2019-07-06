<!DOCTYPE html>
<html>
<?php
//include "php/top.php";
?>
</head>
<body>

  <div class="box">
<h1>Login</h1>
<form class="modal-content animate" action="php/include/dologin.php"
  method="post">

  <div class="container">

    <label for="MailAD"></label> <input type="text"
      placeholder="Enter Username or email" name="MailAD" required> <label
      for="Password"></label> <input type="password"
      placeholder="Enter Password" name="Password" required>

    <button type="submit" name="login-submit">Login</button>
    <label>Remember me <input type="checkbox" checked="checked" name="remember">
    
    </label>

  </div>

</div>
</form>


</body>


</html>
