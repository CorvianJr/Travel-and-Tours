<?php
require_once 'conn.php'; //Connect to Server

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Connected from signup.js
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mi = $_POST['mi'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $userlvl = 'user';

    //Bind and insert to tbl_users in db_ttms
    $sqlUser = "INSERT INTO tbl_users (username, fname, lname, mi, email, phone, pass, userlvl) VALUES (:username, :fname, :lname, :mi, :email, :phone, :pass, :userlvl)";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bindParam(':username', $username);
    $stmtUser->bindParam(':fname', $fname);
    $stmtUser->bindParam(':lname', $lname);
    $stmtUser->bindParam(':mi', $mi);
    $stmtUser->bindParam(':email', $email);
    $stmtUser->bindParam(':phone', $phone);
    $stmtUser->bindParam(':pass', $pass);
    $stmtUser->bindParam(':userlvl', $userlvl);
    $stmtUser->execute();

    echo 'Registration Succesful';
} else {
    echo "AJAX not connected";
}
?>


<!--
TO DO:

Validation
Error Checker
Password hashing

-->