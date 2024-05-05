<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_ttms");

//IF

if(isset($_POST["action"])) {
    if($_POST["action"] == "register") {
        register();
    } else if($_POST["action"] == "login") {
        login();
    }
}

//REGISTER
function register() {
    global $conn;

    $username = $_POST["username"];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleName = $_POST['middleName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['firstname'];

    // Empty Forms
    if (empty($username) || empty($firstName) || empty($lastName) ||  empty($middleName) || empty($email) || empty($phoneNumber) || empty($password)) {
        console.log("Empty");
        exit;
    }

    //Repeated User/Email
    $user = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username'");
    if(mysqli_num_rows($user) > 0) {
        console.log("Repeated");
        exit;
    }

    $query = "INSERT INTO tbl_users VALUES('', '$username', '$firstName', '$lastName', '$middleName', '$email', '$phoneNumber', '$phoneNumber', 'user')";
    mysqli_query($conn, $query);
    console.log("Successful Register");
}
