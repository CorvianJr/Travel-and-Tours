<?php
// Include the database connection script
require_once("../../../conn.php");

// Check if pack_code is provided
if(isset($_GET['pack_code'])) {
    $packCode = $_GET['pack_code'];

    try {
        // Prepare SQL statement to fetch flight data based on pack_code
        $stmt = $conn->prepare("SELECT * FROM tbl_flight WHERE pack_code = ?");
        $stmt->execute([$packCode]);
        $flightData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Close the database connection
        $conn = null;

        // Send flight data as JSON response
        echo json_encode($flightData);
    } catch(PDOException $e) {
        // Handle any errors
        echo json_encode(array('error' => 'An error occurred while fetching data'));
    }
} else {
    // Send error response if pack_code is not provided
    echo json_encode(array('error' => 'Pack code is not provided'));
}
?>