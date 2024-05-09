<?php
require_once("connection.php");

// Check if the product ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Prepare SQL query to retrieve the product details
    $query = "SELECT * FROM product WHERE product_id = ?";
    $stmt = $connection->prepare($query);
    if (!$stmt) {
        die("Error in preparing statement: " . $connection->error);
    }

    $stmt->bind_param("i", $productId);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the product exists
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        // Product not found, redirect to error page or handle appropriately
        header("Location: error.php");
        exit();
    }

    $stmt->close();
} else {
    // Product ID not provided or invalid, redirect to error page or handle appropriately
    header("Location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="update_product.php" method="POST"> <!-- Corrected form action -->
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>"><br><br>
        <label for="price">Price:</label>
        <input type="number" name="price" value="<?php echo $product['price']; ?>"><br><br>
        <label for="category_id">Category ID:</label>
        <input type="text" name="category_id" value="<?php echo $product['category_id']; ?>"><br><br>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
