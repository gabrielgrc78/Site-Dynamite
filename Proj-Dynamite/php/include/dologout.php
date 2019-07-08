<?php
session_start();
session_unset();
session_destroy();
echo "<script>window.alert('Logout Successful.'); window.location.href='?p=index';</script>";

//header("Location:../../index.php");
