<?php
if (isset($_POST["signup-submit"])) {
    require_once('Config.php');
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordVerify = $_POST['pwd-repeat'];

     if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        echo ("<script LANGUAGE='JavaScript'> window.alert('Invalid email'); window.location.href='?p=register'; </script>");
        //echo "<script>alert('Invalid Email and username')</script>";
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       // header("location:../../?p=register?error=invalidmail&uid=" . $username);
        echo "<script>window.alert('Invalid Email'); window.location.href='?p=register';</script>";
        exit();
    } elseif ($password !== $passwordVerify) {
        echo "<script>window.alert('The two passwords do not match, please try again.)</script>";
        exit();
    } else {
        $sql = "SELECT Username FROM useraccounts WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
           // header("location:../../?p=register?error=sqlerror");
            echo "<script>window.alert('SQL Connection ERROR, Please Contact Support to resolve this issue.'); window.location.href='?p=register';</script>";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
             //   header("location:../../?p=register?error=usertaken&mail" . $email);
                echo "<script>window.alert('Username has been taken, please try another Username.'); window.location.href='?p=register';</script>";
                exit();
            } else {
                $sql = "INSERT INTO useraccounts (Username, password) VALUES (?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                  //  header("location:../../?p=register?error=sqlerror");
                    echo "<script>window.alert('SQL Register ERROR, Please Contact Support to resolve this issue.'); window.location.href='?p=register';</script>";
                    exit();
                } else {
                    $pswhash = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $email, $pswhash);
                    mysqli_stmt_execute($stmt);
                  //  header("location:../../index.php?signup=success");
                    echo "<script>window.alert('Registration Successful.'); window.location.href='?p=register';</script>";
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("location:../../?p=register");
    exit();
}
