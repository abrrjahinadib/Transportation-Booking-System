
<html>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center>
<?php
$mysqli = new mysqli("localhost","root","", "transport");
$qr="INSERT INTO `bookinglist`(`Booking_ID`, `Schedule`, `Route`, `Price`) VALUES ('$_POST[bid]','$_POST[sch]','$_POST[rt]','$_POST[pr]')";
if($mysqli->query($qr)){
?>
<font size= "10">Booking has been Added</font></center>
<?php
}
?>

</html>