<!DOCTYPE html>
<html>
<?php
//include "php/top.php";
?>
</head>
<body>
<fieldset>
<h1>Login</h1>
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
    <a href="?p=register">Signup</a>
</fieldset>
</body>

</html>
