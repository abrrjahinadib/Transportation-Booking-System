<html>
<?php
$mysqli = new mysqli("localhost","root","", "transport");
$qr="INSERT INTO `driver`(`Name`, `Number`, `Email`, `Reg_vehicle`) VALUES ('$_POST[name]','$_POST[number]','$_POST[mail]','$_POST[regvh]')";
if($mysqli->query($qr)){
?>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center><font size= "10">New driver has been Added</font></center>
<?php
}
?>
</body>
</html>