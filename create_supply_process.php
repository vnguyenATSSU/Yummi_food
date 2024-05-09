<?php
require_once("connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract details from the form
    $productName = $_POST['productName'];
    $category_id = $_POST['categroryId'];
    $price = $_POST['price'];

    // Check if connection is established
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query to insert the supply into the database
    $query = "INSERT INTO product (product_name, category_id, price) VALUES (?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $connection->prepare($query);
    if (!$stmt) {
        die("Error in preparing statement: " . $connection->error);
    }
    
    $stmt->bind_param("sid", $productName, $category_id, $price);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "New supply added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $connection->close();
} else {
    // Not a POST request, redirect to home page
    header("Location: index.php");
    exit();
}
?>
