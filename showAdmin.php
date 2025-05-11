<html>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center>
<?php
$conn = new mysqli("localhost", "root","", "transport");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `admin`";
$result = $conn->query($sql);
?>
<table><th><font size ="6">Name</th><th><font size ="6">Email</th><th><font size ="6">Number</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["Name"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Number"]. "</td></tr>";
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