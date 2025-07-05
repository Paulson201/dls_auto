<?php
session_start();
// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$f_name = $_SESSION['user_fname'] ?? ''; // Assuming we stored first name in session

// Database connection
$host = 'localhost';
$dbname = 'dls_auto';
$username = 'root'; // Change as per your database configuration
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Handle form submission
$confirmation = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $make = $conn->real_escape_string($_POST['make']);
    $model = $conn->real_escape_string($_POST['model']);
    $year = $conn->real_escape_string($_POST['year']);
    $service = $conn->real_escape_string($_POST['service']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);
    
    // SQL query to insert booking
    $sql = "INSERT INTO bookings (user_id, f_name, vehicle_make, vehicle_model, model_year, service_type, booking_date, booking_time)
            VALUES ('$user_id', '$f_name', '$make', '$model', '$year', '$service', '$date', '$time')";
    
    if ($conn->query($sql)) {
        $confirmation = "Booking confirmed! Your vehicle $make $model is scheduled for $service service on $date at $time";
    } else {
        $confirmation = "Error: " . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Service</title>
    <style>
        body {
            background-color: #001f3f; /* Navy blue */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            width: 450px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #0074D9;
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            font-weight: bold;
        }
        button:hover {
            background-color: #0056b3;
        }
        .confirmation {
            background-color: #dff0d8;
            border: 1px solid #d0e9c6;
            color: #3c763d;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        h2 {
            text-align: center;
            color: #001f3f;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Schedule Vehicle Service</h2>
        
        <?php if ($confirmation): ?>
            <div class="confirmation"><?= $confirmation ?></div>
        <?php endif; ?>
        
        <form method="POST" action="booking.php">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" value="<?= htmlspecialchars($f_name) ?>" readonly>
            </div>
            <div class="form-group">
                <label>Vehicle Make</label>
                <input type="text" name="make" placeholder="e.g., Toyota" required>
            </div>
            <div class="form-group">
                <label>Vehicle Model</label>
                <input type="text" name="model" placeholder="e.g., Camry" required>
            </div>
            <div class="form-group">
                <label>Model Year</label>
                <input type="number" name="year" min="1900" max="<?= date('Y') + 1 ?>" required>
            </div>
            <div class="form-group">
                <label>Service Type</label>
                <select name="service" required>
                    <option value="">Select Service</option>
                    <option value="minor">Minor Service</option>
                    <option value="major">Major Service</option>
                    <option value="upgrades">Upgrades</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" min="<?= date('Y-m-d') ?>" required>
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" name="time" min="08:00" max="18:00" required>
            </div>
            <button type="submit">Submit Booking</button>
        </form>
    </div>
    <
</body>
</html>