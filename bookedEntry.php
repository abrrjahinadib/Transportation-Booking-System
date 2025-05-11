<html>
<body style="background: url(https://static.vecteezy.com/system/resources/previews/019/605/282/non_2x/simple-minimalist-modern-background-trendy-simple-wallpaper-hd-free-vector.jpg); background-size:100% 100%; font-family: 'Arial', sans-serif;">
<center>
<?php
$conn = new mysqli("localhost", "root","", "transport");
$ids = implode($_POST['id']);
$Q = "SELECT Price FROM `bookinglist` WHERE Booking_ID IN (" . $ids . ")";
$result = $conn->query($Q);
?>
<div style="max-width: 800px; width: 100%; background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
    <h2 style="font-size: 36px; font-weight: bold; color: #333;">Your Selected Booking Details</h2>
    <p style="font-size: 24px; color: #555;">Price Information:</p>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div style='font-size: 20px; color: #333; padding: 10px 0;'>";
            echo "Booking ID: <strong>" . $ids . "</strong><br>";
            echo "Price: <strong>" . $row['Price'] . "</strong><br>";
            echo "</div>";
        }
    } else {
        echo "<p style='font-size: 20px; color: #d9534f;'>No results found</p>";
    }
    ?>
    <form action="Pay.php" method="POST" style="font-size: 18px; color: #333; margin-top: 30px;">
        <div style="margin-bottom: 20px;">
            <label for="n" style="font-weight: bold;">Enter Name:</label><br>
            <input type="text" name="n" required style="width: 100%; padding: 12px; font-size: 18px; border: 1px solid #ccc; border-radius: 8px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="num" style="font-weight: bold;">Enter Number:</label><br>
            <input type="text" name="num" required style="width: 100%; padding: 12px; font-size: 18px; border: 1px solid #ccc; border-radius: 8px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="id" style="font-weight: bold;">Enter Booking ID:</label><br>
            <input type="text" name="id" required style="width: 100%; padding: 12px; font-size: 18px; border: 1px solid #ccc; border-radius: 8px;">
        </div>
        <button type="submit" style="font-size: 20px; padding: 14px 30px; background-color: #28a745; border: none; color: white; border-radius: 8px; cursor: pointer;">
            Pay
        </button>
    </form>
</div>
</center>
</body>
</html>