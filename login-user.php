<?php
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Get Input from Forms
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    //Check if Username match in database
    $stmtCheck = $conn->prepare("SELECT * FROM tbl_users WHERE username = :username AND pass = :pass");
    $stmtCheck->bind_param(':username',$username);
    $stmtCheck->bind_param(':pass': $pass);
    $stmtCheck->execute();

    $login=$stmtCheck->fetch();

    if ($sqlCheck->rowCount() >  0) {
        echo 'Username found in Database';
    }

    if($login != null) { //LOGIN SESSION
        $_SESSION['username'] = $username;
        echo 'New Username in Session';
    } else {
        echo 'Login Failed';
    }


    
}
?>