<html>
<body style="background: url(https://www.wallpaperflare.com/static/810/438/549/futurama-philip-j-fry-memes-simpson-wallpaper.jpg); background-size:100% 100%; font-family: 'Arial', sans-serif; color: #333;">
<center>
    <div style="background-color: rgba(255, 255, 255, 0.7); padding: 20px; border-radius: 10px; width: 80%; max-width: 900px; margin: 30px auto;">
        <font size="8" style="font-weight: bold; color: #007bff;">Your Payment Has Been Received</font><br><br>
    </div>
    <?php
    $conn = new mysqli("localhost", "root", "", "transport");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $s1 = "INSERT INTO `bookedlist`(`Name`, `Number`, `Booking_ID`) VALUES ('$_POST[n]','$_POST[num]','$_POST[id]')";
    $sql4 =  "SELECT * FROM `Summary`";
    $result = $conn->query($sql4);
    if ($result->num_rows > 0) {
        $sql = "UPDATE `Summary` SET Total_earning = Total_earning + 500";
        $sql1 = "UPDATE `Summary` SET No_of_tickets_sold = No_of_tickets_sold + 1";        
        $sql2 = "UPDATE `Summary` SET Total_cost = Total_cost + 300";        
        $sql3 = "UPDATE `Summary` SET Profit = Profit + 200";        
    } else {
        $sql5 = "INSERT INTO `Summary` VALUES (500, 1, 300, 200)";        
    }
    $conn->close();
    ?>
    <form action="passenger_page.php" method="get" style="margin-top: 40px;">
        <button type="submit" style="padding: 12px 25px; font-size: 18px; background-color: #007bff; border: none; color: white; border-radius: 8px; cursor: pointer;">
            Back to Home
        </button>
    </form>
</center>
</body>
</html>
