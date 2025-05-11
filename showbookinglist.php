<html>
<body style="background: url(https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExMXRqZjB6Y3QxeDhxZHJxZ3FqbWx4ajF6azI3eGVjNXR5OXU1bHQyZCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/4xWGyVKoXqg2eVCiq9/giphy.gif); background-size:100% 100%;">
<center>
<?php
$conn = new mysqli("localhost", "root","", "transport");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `bookinglist`";
$result = $conn->query($sql);
?>
<form action="bookedEntry.php" method = "Post">
<table style="border-collapse: collapse; width: 80%; text-align: center;">
    <thead>
        <tr>
            <th style="font-size: 24px; padding: 12px; background-color: #f2f2f2; border: 2px solid #ddd; border-radius: 8px;">Booking</th>
            <th style="font-size: 24px; padding: 12px; background-color: #f2f2f2; border: 2px solid #ddd; border-radius: 8px;">Schedule</th>
            <th style="font-size: 24px; padding: 12px; background-color: #f2f2f2; border: 2px solid #ddd; border-radius: 8px;">Route</th>
            <th style="font-size: 24px; padding: 12px; background-color: #f2f2f2; border: 2px solid #ddd; border-radius: 8px;">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td style="padding: 10px; border: 2px solid #ddd; font-size: 20px; background-color: #fafafa;">
                            <input type="checkbox" name="id[]" value="'. $row["Booking_ID"] .'" >
                            ' . $row["Booking_ID"] . '
                        </td>
                        <td style="padding: 10px; border: 2px solid #ddd; font-size: 20px; background-color: #fafafa;">' . $row["Schedule"] . '</td>
                        <td style="padding: 10px; border: 2px solid #ddd; font-size: 20px; background-color: #fafafa;">' . $row["Route"] . '</td>
                        <td style="padding: 10px; border: 2px solid #ddd; font-size: 20px; background-color: #fafafa;">' . $row["Price"] . '</td>
                    </tr>';
            }
        } else {
            echo "<tr><td colspan='4' style='font-size: 20px; padding: 10px; text-align: center;'>No results</td></tr>";
        }
        ?>
    </tbody>
</table>
<button type="submit" style="font-size: 24px; padding: 12px 24px; margin-top: 20px; background-color: #4CAF50; border: none; color: white; cursor: pointer; border-radius: 8px;">Submit</button>
</form>
<?php
echo "</center>";
$conn->close();
?>
</body>
</html>
