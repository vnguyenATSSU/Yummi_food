<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <title>Eco-Store Management - Add Supply</title>
</head>
<body>
    <header>
        <h1>Add New Supply</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create_supply.php">Add Supply</a></li>
            <li><a href="supply_search.php">Search Supplies</a></li>         
            <li><a href="supplies_management.php">Supplies Management</a></li>
        </ul>
    </nav>
    <section>
        <form action="create_supply_process.php" method="post" id="createSupplyForm">
            <h2>Supply Information</h2>
            <label for="productName">Supply Name:</label>
            <input type="text" id="productName" name="productName" required>

            <label for="categroryId">Quantity:</label>
            <input type="number" id="categroryId" name="categroryId" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <input type="submit" value="Add Supply">
        </form>
    </section>

    <footer>
        <p>Eco-Store Management System ©2024</p>
    </footer>
    
</body>
</html>
