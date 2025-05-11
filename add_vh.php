<html>
<?php
$mysqli = new mysqli("localhost","root","", "transport");
$qr="INSERT INTO `vehicle`(`Registration_Number`, `Admin_Name`, `Admin_Number`) VALUES ('$_POST[rnum]','$_POST[name]','$_POST[num]')";
if($mysqli->query($qr)){
?>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center><font size= "10">New Vehicle has been Added</font></center>
<?php
}
?>
</body>
</html>