<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'dls_auto');
    
    $f_name = $conn->real_escape_string($_POST['f_name']);
    $l_name = $conn->real_escape_string($_POST['l_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (f_name, l_name, email, address, password) 
            VALUES ('$f_name', '$l_name', '$email', '$address', '$password')";

    if ($conn->query($sql)) {
        header("Location: login.php?signup=success");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            background-color: #001f3f; /* Navy blue */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            width: 350px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #0074D9;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 style="text-align: center; color: #001f3f;">Create Account</h2>
        <form method="POST" action="signup.php">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="f_name" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="l_name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <p style="text-align: center; margin-top: 20px;">
            Already have an account? <a href="login.php">Login</a>
        </p>
    </div>
    
</body>
</html>