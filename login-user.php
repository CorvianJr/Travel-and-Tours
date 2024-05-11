<?php
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Get Input from Forms
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    //Check if Username match in database
    $sqlCheck = "SELECT * FROM tbl_users WHERE username = :username";
    $stmtCheck = $conn->prepare($sqlCheck);
    $stmtCheck->bindParam(':username', $username);
    $stmtCheck->execute();

    if ($sqlCheck->rowCount() >  0) {
        echo 'Username found in Database';
        //$user = $stmtCheck->fetch();
    }
}
?>