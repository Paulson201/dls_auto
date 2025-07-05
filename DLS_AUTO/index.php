<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL'S Auto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:rgb(30, 83, 139);
            padding: 15px 40px;
            box-shadow: 0 2px 5px rgba(255, 241, 241, 0.1);
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s;
            position: relative;
            padding: 5px 0;
        }
        
        .nav-links a:hover {
            color: #28a745;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #28a745;
            transition: width 0.3s;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .login-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 15px;
            transition: background-color 0.3s, transform 0.2s;
        }
        
        .login-btn:hover {
            background-color: #28a745;
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-links">
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="newsletter.php">Newsletter</a>
            <a href="pricing.php">Pricing</a>
        </div>
        <a href="login.php"><button class="login-btn" >Sign Up/ Login </button></a>
    </nav>

    <div style="text-align: center; margin-top: 20px;">
        
        <h1>Page Under Construction</h1>
        <p>We're working hard to bring you this page.</p>
        <img src="img/crane.png" alt="under construction" style="width: 200px; margin: 20px auto; display: block;">
   
    </div>
</body>
</html>
