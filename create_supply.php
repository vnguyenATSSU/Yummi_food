<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Food - Yummi Food</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .header h1 {
            margin: 0;
        }

        .header .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .header .auth-buttons a {
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            border: 1px solid #fff;
            border-radius: 4px;
        }

        .header .auth-buttons a:hover {
            background-color: #fff;
            color: #343a40;
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
            max-width: 600px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8); /* semi-transparent white */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-image: url('https://i.pinimg.com/originals/33/ef/8b/33ef8b9c0b902154a6cd4103a21275ef.jpg'); /* Placeholder image URL */
            background-size: cover;
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
        .form-group input[type="number"],
        .form-group input[type="file"] {
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
        <h1>Yummi Food - Add New Food</h1>
        <div class="auth-buttons">
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </div>
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
        <h2>Add New Food</h2>
        <form action="create_supply_process.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="productName">Food Name:</label>
                <input type="text" id="productName" name="productName" required>
            </div>
            <div class="form-group">
                <label for="categoryId">Category ID:</label>
                <input type="number" id="categoryId" name="categoryId" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="foodImage">Insert Picture:</label>
                <input type="file" id="foodImage" name="foodImage" accept="image/*">
            </div>
            <div class="form-group">
                <input type="submit" value="Add Food">
            </div>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 Yummi Food. All rights reserved.</p>
    </div>
</body>
</html>
