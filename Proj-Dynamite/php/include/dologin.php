<?php
function sql_sanitize( $sCode ) {
    if (function_exists("mysqli_real_escape_string" ) ) {
        $sCode = mysql_real_escape_string( $sCode );
    } else {
        $sCode = addslashes( $sCode );
    }
    return $sCode;
}

if (isset($_POST['login-submit'])) {
    require_once ('config.php');

    $email = mysqli_real_escape_string($_POST['MailAD']);
    $password = mysqli_real_escape_string($_POST['Password']);

     if ($conn == true){
        $sql = "SELECT * FROM UserAccounts WHERE Username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "<script>window.alert('There a backend error, this issue will be resolved shortly, please try again later.'); window.location.href='?p=login';</script>";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                var_dump($pwdCheck);
              //  $pwdCheck = $password == $row['password'];
                if ($pwdCheck == false) {
                  //  header("location:../../?p=login?error=wrongpwd");
                echo "<script>window.alert('Wrong Password.'); window.location.href='?p=login';</script>";
                printr(var_dump($pwdCheck));
                    exit();
                } elseif ($pwdCheck == true) {
                    if ($row['UserStatus'] == 1){
                    session_start();
                    $_SESSION['userauth'] = $row['Userlevel'];
                    $_SESSION['useruid'] = $row['Username'];

                    echo "<script>window.alert('Login Success.'); window.location.href='?p=login';</script>";
                    exit();
                    } else{
                        echo "<script>window.alert('Account inactive.'); window.location.href='?p=login';</script>";
                    }
                } else {
                  echo "<script>window.alert('Wrong Password.'); window.location.href='?p=login';</script>";
                  exit();
                  }
            } else {
              echo "<script>window.alert('You dont seem to be registered, If you believe this to be an error please contact support to resolve this issue.'); window.location.href='?p=login';</script>";
                exit();
            }
        }
    }
} else {
    header("location:../../?p=login");
    exit();
}
