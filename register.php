<?php
$conn = new mysqli("localhost", "root", "", "transport");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
	$reg_vehicle = $_POST['reg_vehicle'];
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $password, $role);
    $stmt->execute();
    if ($role == 'passenger') {
        $stmt = $conn->prepare("INSERT INTO passenger (name, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $password);
    } else {
        $reg_vehicle = $_POST['reg_vehicle'];
        $stmt = $conn->prepare("INSERT INTO driver (name, email, number, password, reg_vehicle) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $password, $reg_vehicle);
    }
    if ($stmt->execute()) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register - Gaari Lagbe?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/736x/77/76/30/7776304ced19578dd80417f3edcba012.jpg');
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
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 36px;
            color: #333;
        }
        label {
            font-size: 18px;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="radio"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 14px;
            margin-top: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .role-options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .role-option {
            font-size: 18px;
        }
        .back-link {
            margin-top: 15px;
            font-size: 16px;
        }
        .back-link a {
            color: #007bff;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Register</h1>
    <form method="POST" action="register.php">
        <label><strong>Register As:</strong></label><br>
        <div class="role-options">
            <label class="role-option"><input type="radio" name="role" value="passenger" required onclick="toggleFields()"> Passenger</label>
            <label class="role-option"><input type="radio" name="role" value="driver" required onclick="toggleFields()"> Driver</label>
        </div>
        <br>
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <div id="vehicleField" style="display: none;">
            <label>Registered Vehicle No. :</label><br>
            <input type="text" name="reg_vehicle"><br><br>
        </div>
        <input type="submit" value="Register">
    </form>
    <div class="back-link">
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</div>
<script>
function toggleFields() {
    let selectedRole = document.querySelector('input[name="role"]:checked').value;
    document.getElementById('vehicleField').style.display = selectedRole === 'driver' ? 'block' : 'none';
}
</script>
</body>
</html>
