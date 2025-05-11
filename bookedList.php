<html>
<body style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUle4zdSHJVnnB-tq525GjMJA0kBtS506jlQ&s); background-size:100% 100%; background-position: center; background-attachment: fixed;">
<center>
    <h1 style="color: white; font-family: Arial, sans-serif; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); font-size: 50px;">Booked List</h1><br><br>
    <?php
    $conn = new mysqli("localhost", "root", "", "transport");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM `bookedlist`";
    $result = $conn->query($sql);
    ?>
    <table style="width: 80%; margin-top: 20px; border-collapse: collapse; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; overflow: hidden;">
        <thead>
            <tr>
                <th style="padding: 15px; font-size: 20px; text-align: center; color: #fff; background-color: #007bff; border: 1px solid #ddd;">Name</th>
                <th style="padding: 15px; font-size: 20px; text-align: center; color: #fff; background-color: #007bff; border: 1px solid #ddd;">Number</th>
                <th style="padding: 15px; font-size: 20px; text-align: center; color: #fff; background-color: #007bff; border: 1px solid #ddd;">Booking ID</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr style='text-align: center;'>";
                echo "<td style='padding: 12px; font-size: 18px; background-color: #f9f9f9; border: 1px solid #ddd;'>" . $row["Name"] . "</td>";
                echo "<td style='padding: 12px; font-size: 18px; background-color: #f9f9f9; border: 1px solid #ddd;'>" . $row["Number"] . "</td>";
                echo "<td style='padding: 12px; font-size: 18px; background-color: #f9f9f9; border: 1px solid #ddd;'>" . $row["Booking_ID"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3' style='text-align: center; padding: 20px;'>No results found</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <?php
    $conn->close();
    ?>
</center>
</body>
</html>
