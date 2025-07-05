<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a5f23, #2e8b57);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .admin-container {
            width: 100%;
            max-width: 900px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        
        .header {
            background: #1a3c27;
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .brand i {
            font-size: 1.8rem;
        }
        
        .brand h1 {
            font-size: 1.5rem;
        }
        
        .admin-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .admin-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2e8b57;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .logout-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }
        
        .logout-btn:hover {
            background: #c0392b;
        }
        
        .dashboard-content {
            padding: 30px;
            text-align: center;
        }
        
        .welcome-section {
            margin: 30px 0;
        }
        
        .welcome-icon {
            font-size: 4rem;
            color: #1a3c27;
            margin-bottom: 20px;
        }
        
        .welcome-section h2 {
            color: #1a3c27;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .admin-name {
            color: #2e8b57;
            font-weight: 700;
        }
        
        .welcome-section p {
            color: #555;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 20px auto;
            line-height: 1.6;
        }
        
        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .stat-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            border-top: 4px solid #2e8b57;
        }
        
        .stat-card i {
            font-size: 2rem;
            color: #2e8b57;
            margin-bottom: 15px;
        }
        
        .stat-card h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 5px;
        }
        
        .stat-card p {
            color: #777;
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            color: #7f8c8d;
            font-size: 0.9rem;
            border-top: 1px solid #eee;
        }
       </style>
</head>
<body>
    <div style="text-align: center; margin-top: 20px;">
        
        <h1>Page Under Construction</h1>
        <p>We're working hard to bring you this page.</p>
        <img src="/DLS_AUTO/admin/img/crane.png" alt="under construction" style="width: 200px; margin: 20px auto; display: block;">
   
    </div>
</body>