<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for Food - Yummi Food</title>
    <link rel="stylesheet" href="styles/styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .nav {
            background-color: #adb5bd;
            padding: 10px 0;
            text-align: center;
        }

        .nav ul {
            list-style-type: none;
            padding: 0;
        }

        .nav ul li {
            display: inline;
            margin-right: 20px;
        }

        .nav ul li a {
            text-decoration: none;
            color: #212529;
            font-weight: bold;
        }

        .nav ul li a:hover {
            color: #000;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #343a40;
        }

        .form-group input[type="text"], 
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .search-results {
            margin-top: 20px;
        }

        .search-results table {
            width: 100%;
            border-collapse: collapse;
        }

        .search-results th, .search-results td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .search-results th {
            background-color: #007bff;
            color: #fff;
        }

        .search-results tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .footer {
            text-align: center;
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Yummi Food</h1>
    </div>
    
    <div class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create_supply.php">Add Food</a></li>
            <li><a href="supply_search.php">Search for Food</a></li>
            <li><a href="supplies_management.php">Food Management</a></li>
        </ul>
    </div>

    <div class="container">
        <h2>Search for Food</h2>
        <form action="supply_search_results.php" method="get">
            <div class="form-group">
                <label for="searchTerm">Search Term:</label>
                <input type="text" id="searchTerm" name="searchTerm" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Search">
            </div>
        </form>

        <!-- Example of search results table -->
        <div class="search-results">
            <h3>Search Results</h3>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Category ID</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example rows, replace with PHP loop to fetch data -->
                    <tr>
                        <td>Sample Product 1</td>
                        <td>1</td>
                        <td>$10.99</td>
                    </tr>
                    <tr>
                        <td>Sample Product 2</td>
                        <td>2</td>
                        <td>$15.49</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Yummi Food. All rights reserved.</p>
    </div>
</body>
</html>
