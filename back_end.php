<html>
<head>
	<link rel="stylesheet" href="style.css"></link>
</head>
<body>




<?php
$mysql_port=getenv("S2G_MYSQL_PORT");
$dbhost="localhost:".$mysql_port;
$dbuser='root';
$dbpwd='';
$conn=mysql_connect($dbhost,$dbuser,$dbpwd)or die("Connection Failed");

mysql_select_db("backend");


		$no1=$_POST['no_biryani'];
		$no2=$_POST['no_mutton'];
		$no3=$_POST['no_fried'];
		$no4=$_POST['no_veg'];
		$no5=$_POST['no_pasta'];

 $total = $no1*90 + $no2*100 + $no3*150 + $no4*80 + $no5*110;

$query = "INSERT INTO `hotel` ( `fo1` , `fo2` , `fo3` , `fo4` , `fo5` , `total` )VALUES($no1,$no2,$no3,$no4,$no5,$total)"; 

$result = mysql_query($query,$conn);

if($result==0)
	echo "Failure";
else
	echo "SUCCESSFULLY INSERTED INTO DATABASE!"

?>

<br><br><br><br><br><br>

<marquee> <h1>THANK U FOR DINING WITH US</h1></marquee>

<br><br><br>
<center>
<a href='front_end.php'><button type='button'>BACK TO MENU</button></a>
</center>


</body>
</html>
