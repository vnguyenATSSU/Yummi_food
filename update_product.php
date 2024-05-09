<?php
require_once("connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    // Extract details from the form
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $price = $_POST['price'];

    // Prepare SQL query to update the product in the database
    $query = "UPDATE product SET product_name = ?, price = ? WHERE product_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sdi", $productName, $price, $productId);

    // Execute the query and check for success
    if ($stmt->execute()) {
        // Redirect back to the search results page with a success message
        header("Location: supply_search_results.php?status=success&message=Product+updated");
        exit();
    } else {
        // Redirect back with an error message
        header("Location: supply_search_results.php?status=error&message=Could+not+update+the+product");
        exit();
    }

    $stmt->close();
} else {
    // Redirect back with an error message
    header("Location: supply_search_results.php?status=error&message=Invalid+request");
    exit();
}
?>
