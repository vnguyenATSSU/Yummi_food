<?php
require_once("connection.php");

// Check if the search form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];

    // Check if connection is established
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query to find supplies that match the search term
    $query = "SELECT * FROM product WHERE product_name LIKE ? OR category_id LIKE ?";
    $stmt = $connection->prepare($query);
    if (!$stmt) {
        die("Error in preparing statement: " . $connection->error);
    }

    $likeTerm = '%' . $searchTerm . '%';
    $stmt->bind_param("ss", $likeTerm, $likeTerm);

    // Execute the query and bind result variables
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<h1>Search Results</h1>";
        echo "<table><tr><th>Product Name</th><th>Category ID</th><th>Price</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["product_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["category_id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["price"]) . "</td>";
            echo "<td><a href='edit_product.php?id=" . $row["product_id"] . "'>Edit</a> | <button onclick='deleteProduct(" . $row["product_id"] . ")'>Delete</button></td>"; // Edit and delete buttons
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found for '$searchTerm'</p>";
    }
    $stmt->close();
    $connection->close();
} else {
    // Not a GET request or searchTerm not set, redirect to home page
    header("Location: index.php");
    exit();
}
?>

<script>
function deleteProduct(productId) {
    if (confirm("Are you sure you want to delete this product?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_product.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Reload the page after deletion
                location.reload();
            }
        };
        xhr.send("id=" + productId); // Corrected the parameter name to match delete_product.php
    }
}
</script>
