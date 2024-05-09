<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <title>Search Supplies - Eco-Store Management</title>
</head>
<body>
    <header>
        <h1>Search Supplies</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create_supply.php">Add Supply</a></li>
            <li><a href="supply_search.php">Search Supplies</a></li>
            <li><a href="supplies_management.php">Manage Supplies</a></li>
        </ul>
    </nav>

    <section>
        <form action="supply_search_results.php" method="get">
            <label for="searchTerm">Search Term:</label>
            <input type="text" id="searchTerm" name="searchTerm" >
            <input type="submit" value="Search">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Eco-Store Management System</p>
    </footer>
</body>
</html>
