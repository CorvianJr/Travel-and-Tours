<?php
session_start(); // Add this line at the beginning of the file

// Include the connection file
require_once 'conn.php';

// FUNCTION FOR SIGNUP

// Check if form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Enable error reporting for PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Error: Passwords do not match.";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username already exists in the database
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        echo "Error: The username already exists.";
        exit;
    }

    // Insert the user data into the database
    $sql = "INSERT INTO tbl_users (username, lname, fname, mi, email, phone, pass) VALUES ('$username', '$lname', '$fname', '$mname', '$email', '$phone', '$password')";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $lname, $fname, $mname, $email, $phone, $password]);

    // Check if the data was inserted successfully
    if ($stmt->rowCount() > 0) {
        $success_message = "User registered successfully.";
        $_SESSION['success_message'] = $success_message; // Store the success message in the session
        header("Location: signin.html"); // Redirect to signin.html
        exit;
    } else {
        $error_message = "Error: " . $stmt->errorInfo()[2];
    }

    // Close statement
    $stmt = null;
}

// Close connection
$conn = null;
?>