<html>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center>
<?php
$conn = new mysqli("localhost", "root","", "transport");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `bookinglist`";
$ids = implode($_POST ['id']);
$Q="delete from `bookinglist` where Booking_ID in (".$ids.")";
if($conn->query($Q)){
echo "Selected booking successfully removed";
}
$result = $conn->query($sql);
?>
<form action="removeqr.php" method = "Post">
<table><th><font size ="6">Booking ID</th><th></th><th><font size ="6">Schedule</th><th><font size ="6">Route</th><th><font size ="6">Price</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr> <td> <input type="checkbox" name="id[]" value="'. $row["Booking_ID"] .'" >  </td><td>' . $row["Booking_ID"]. "</td><td>" . $row["Schedule"]. "</td><td>" . $row["Route"]."</td><td>". $row["Price"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<button type ="submit">Submit</button>
<?php
echo "</form>";
$conn->close();
?>
</center>
</body>
</html>