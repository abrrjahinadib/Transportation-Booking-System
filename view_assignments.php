<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'driver') {
    header("Location: login.php");
    exit();
}

$Email = $_SESSION['email'];

$conn = new mysqli("localhost", "root", "", "transport");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get bookings assigned to this driver
$sql = "SELECT * FROM bookedlist WHERE Booking_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $bookingID);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Assignments</title>
    <style>
        body {
            background-color: #f0f4f7;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 30px;
        }
        th, td {
            border: 1px solid #333;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #00bcd4;
            color: white;
        }
        a.button {
            display: inline-block;
            margin-top: 30px;
            text-align: center;
            background-color: #00bcd4;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
        }
        a.button:hover {
            background-color: #0097a7;
        }
    </style>
</head>
<body>
    <h2>Bookings Assigned to You</h2>

    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Passenger Name</th>
                <th>Passenger Number</th>
                <th>Booking ID</th>
                <th>Status</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['Name']) ?></td>
                <td><?= htmlspecialchars($row['Number']) ?></td>
                <td><?= htmlspecialchars($row['Booking_ID']) ?></td>
                <td><?= isset($row['Status']) ? htmlspecialchars($row['Status']) : 'Pending' ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p style="text-align:center;">No assignments found for you at the moment.</p>
    <?php endif; ?>

    <div style="text-align:center;">
        <a class="button" href="driver_page.php">Back to Dashboard</a>
    </div>

</body>
</html>

<?php
$conn->close();
?>
