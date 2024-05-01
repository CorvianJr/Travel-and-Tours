<?php
require_once '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookingID = $_POST['bookingID'];
    $passport = $_POST['passport'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $middleInit = $_POST['middleInit'];
    $adultHead = $_POST['adultHead'];
    $childHead = $_POST['childHead'];
    $specialReq = $_POST['speicalReq'];

    $sqlBook = "INSERT INTO tbl_book (booking_id, passport, adult_headcount, child_headcount, request) VALUES (:bookingID, :passport, :adultHead, :childHead, :specialReq)";
    $stmtBook = $conn->prepare($sqlBook);
    $stmtBook->bindParam(':bookingID', $bookingID);
    $stmtBook->bindParam(':passport', $passport);
    $stmtBook->bindParam(':adultHead', $adultHead);
    $stmtBook->bindParam(':childHead', $childHead);
    $stmtBook->bindParam(':specialReq', $specialReq);

    if (stmtBook->execute()) {
        if (isset($_POST[]))
    }

}