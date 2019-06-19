<?php

if (isset($_POST['login-submit'])) {
    require 'config.php';
    $emailuser = $_POST['MailAD'];
    $password = $_POST['Password'];

    if (empty($emailuser) || empty($password)) {
        header("location:../../?p=login?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM accounts WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:../../?p=login?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $emailuser, $emailuser);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header("location:../../?p=login?error=wrongpwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['useruid'] =$row['username'];
                    
                    header("location:../../index.php?login=success");
                    exit();
                } else {
                    header("location:../../?p=login?error=wrongpwd");
                    exit();
                }
            } else {
                header("location:../../?p=login?error=nouser");
                exit();
            }
        }
    }
} else {
    header("location:../../?p=login");
    exit();
}