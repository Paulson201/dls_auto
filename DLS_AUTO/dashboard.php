<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'dls_auto');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user_id = $_SESSION['user_id'];
$sql = "SELECT f_name, l_name, email, address FROM users WHERE id='$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #001f3f;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        h1 {
            color: #001f3f;
            border-bottom: 2px solid #0074D9;
            padding-bottom: 10px;
        }
        .user-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .label {
            font-weight: bold;
            color: #001f3f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <?= htmlspecialchars($user['f_name']) ?> <?= htmlspecialchars($user['l_name']) ?> !</h1>
        
        <div class="user-info">
            <div class="info-item">
                <span class="label">Current booking:</span> 

            </div>
            <div class="info-item">
                <span class="label">Last Name:</span> 
            </div>
            <div class="info-item">
                <span class="label">Email:</span> <?= htmlspecialchars($user['email']) ?>
            </div>
            <div class="info-item">
                <span class="label">Address:</span> <?= htmlspecialchars($user['address']) ?>
            </div>
        </div>
        
        <p style="text-align: center; margin-top: 30px;">
            <a href="booking.php" style="color: #0074D9;">Place a Booking</a>

        <p style="text-align: center; margin-top: 30px;">
            <a href="logout.php" style="color: #0074D9;">Logout</a>
        </p>
    </div>
    
</body>
</html>