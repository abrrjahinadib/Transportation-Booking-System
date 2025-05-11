<html>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center>
<?php

$conn = new mysqli("localhost", "root","", "transport");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `bookinglist`";
$result = $conn->query($sql);
?>
<table><th><font size ="6">Booking ID</th><th><font size ="6">Schedule</th><th><font size ="6">Route</th><th><font size ="6">Price</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["Booking_ID"]. "</td><td>" . $row["Schedule"]. "</td><td>" . $row["Route"]."</td><td>". $row["Price"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<br><br><br>

<?php
$conn->close();
?>

<form action="addqr.php" method = "Post">
<font size = "5">
Booking ID:<input type = "text" name="bid"></input><br><br>
Schedule :<input type = "text" name="sch"></input><br><br>
Route:<input type = "text" name="rt"></input><br><br>
Price:<input type = "text" name="pr"></input><br><br>
<input type = "submit" name="Submit"></input><br><br>
</font>
</form>
</center>
</body>
</html>