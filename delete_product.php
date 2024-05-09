<?php
require_once("connection.php");

// Check if an ID was passed and the request is via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $productId = $_POST['id'];

    // Prepare SQL query to delete the product
    $query = "DELETE FROM product WHERE product_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $productId);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$connection->close();
?>
