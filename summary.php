<html>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center>
<?php
$conn = new mysqli("localhost", "root","", "transport");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `summary`";
$result = $conn->query($sql);
?>
<table><th><font size ="4">Total Earning|</th><th><font size ="4">No_Of_Ticket_Sold|</th><th><font size ="4">Total_Cost|</th><th><font size ="4">Profit</th></font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Total_earning"]. "</td><td>" . $row["No_of_tickets_sold"]. "</td><td>" . $row["Total_cost"]."</td><td>" . $row["Profit"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</center>
</body>
</html>