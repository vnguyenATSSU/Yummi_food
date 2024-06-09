<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummi Food - Home</title>
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

        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #343a40;
        }

        .section-content {
            margin-bottom: 20px;
            line-height: 1.6;
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
        <h2 class="section-title">Welcome to Yummi Food</h2>
        <p class="section-content">
            Yummi Food is your ultimate destination for discovering and managing delicious food items.
        </p>
    </div>

    <div class="footer">
        <p>&copy; 2024 Yummi Food. All rights reserved.</p>
    </div>
</body>
</html>
