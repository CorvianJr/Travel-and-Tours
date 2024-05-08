<?php
require 'conn.php';

$status = $_REQUEST['status'];

// Register

if ($status == 'register') {
    $username = $_REQUEST['username'];
    $lname = $_REQUEST['lname'];
    $fname = $_REQUEST['fname'];
    $mname = $_REQUEST['mname'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    if  ($password != $confirm_password) {
        echo "pwdMissMatch";
    } else {
        $sql = "SELECT username FROM tbl_users WHERE username=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo 'sqlError';
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysql_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                echo 'usernameTaken';
            } else {
                $passHashed = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO tbl_users (username, lname, fname, mi, email, phone, pass) VALUES ('$username', '$lname', '$fname', '$mname', '$email', '$phone', '$passHashed')";

                if ($db->query($sql)) {
                    session_start();
                    $_SESSION['username'] = $username;
                    echo "OK";
                } else {
                    echo "Error";
                }
            }
        }
    }
}

// Log In

if ($status == 'login') {
    $username = mysqli_real_escape_string($db, $REQUEST['username']);
    $password = $_REQUEST['password'];

    $sql = "SELECT * FROM tbl_users WHERE username=?;";
    $stmt = mysqli_stmt_prepare($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'sqlError';
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck= password_verify($password, $rowp['pass']);
            if ($pwdCheck == false) {
                echo 'wrongPwd';
            } else if ($pwdCheck == true) {
                session_start();
                $_SESSION['username'] = $row['username'];
                echo 'OK';
            } else {
                echo 'wrongPwd';
            }
        } else {
            echo 'noUser';
        }
    }

}

?>