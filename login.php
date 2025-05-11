<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "transport");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $mysqli->query("SELECT * FROM `admin` WHERE `Email`='$email' AND `Password`='$password'");
    if ($result->num_rows > 0) {
        $_SESSION['role'] = 'admin';
        $_SESSION['email'] = $email;
        header("Location: adminpage.php");
        exit();
    }
    $result = $mysqli->query("SELECT * FROM `driver` WHERE `Email`='$email' AND `Password`='$password'");
    if ($result->num_rows > 0) {
        $_SESSION['role'] = 'driver';
        $_SESSION['email'] = $email;
        header("Location: driver_page.php");
        exit();
    }
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
    if ($result->num_rows > 0) {
        $_SESSION['role'] = 'passenger';
        $_SESSION['email'] = $email;
        header("Location: passenger_page.php");
        exit();
    }
    echo "Invalid email or password!";
}
$mysqli->close();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gaari Lagbe?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://musicart.xboxlive.com/7/0c6e5100-0000-0000-0000-000000000002/504/image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 32px;
            color: #333;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }
        input[type="submit"], a.button-link {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: block;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover, a.button-link:hover {
            background-color: #0056b3;
        }
        a.button-link {
            background-color: #6c757d;
        }
        p {
            margin-top: 15px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gaari Lagbe?</h1>
        <form method="POST" action="login.php">
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
