<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'driver') {
    header("Location: login.php");
    exit();
}
$driverName = $_SESSION['username']; // Driver's name from session
?>
<html>
<head>
    <title>Driver Dashboard</title>
    <style>
        body {
            background: url("https://e0.365dm.com/24/02/1600x900/skysports-ferrari-sf24-launch_6453999.png?20240213110808");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            text-align: center;
            color: #fff;
            padding-top: 100px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 40px;
            text-shadow: 2px 2px 8px #000;
        }
        .button {
            font-size: 20px;
            padding: 15px 30px;
            margin: 15px;
            background-color: #e10600;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .button:hover {
            background-color: #a10500;
        }
    </style>
</head>
<body>
    <h1>Welcome?>!</h1>
    <a class="button" href="view_assignments.php">View Assignments</a>
    <a class="button" href="login.php">Logout</a>
</body>
</html>
