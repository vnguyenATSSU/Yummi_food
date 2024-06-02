<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <title>Eco-Store Management - Add Supply</title>
</head>
<body>
    <header>
        <h1>Add New Food</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create_supply.php">Add Food</a></li>
            <li><a href="supply_search.php">Search for food</a></li>         
            <li><a href="supplies_management.php">Food Management</a></li>
        </ul>
    </nav>
    <section>
        <form action="create_supply_process.php" method="post" id="createSupplyForm">
            <h2>Food Information</h2>
            <label for="productName">Food Name:</label>
            <input type="text" id="productName" name="productName" required>

            <label for="categroryId">Quantity:</label>
            <input type="number" id="categroryId" name="categroryId" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <input type="submit" value="Add Food">
        </form>
    </section>

    <footer>
        <p>Eco-Store Management System ©2024</p>
    </footer>
    
</body>
</html>
