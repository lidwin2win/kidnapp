<html>
<head>
	<link rel="stylesheet" href="style.css"></link>
</head>
<body>
<div id='header'>
	<center><br><br>
	<?php

		$no_1=$_POST['no_biryani'];
		$no_2=$_POST['no_mutton'];
		$no_3=$_POST['no_fried'];
		$no_4=$_POST['no_veg'];
		$no_5=$_POST['no_pasta'];

	/*
		echo $no_biryani;
		echo $no_mutton;
		echo $no_fried;
		echo $no_veg;
		echo $no_pasta;
	*/

		$total = $no_1*90 + $no_2*100 + $no_3*150 + $no_4*80 + $no_5*110;


		



		echo "The Current Total Price = ".$total;


	?>
	<br><br>

	<a href='front_end.php'><button type='button'>REVISE ORDER</button></a>
	<br><br>

	<?php if($total== 0)
		echo "PLEASE GO BACK AND REVISE YOUR ORDER AS YOU HAVE NOT ORDERED ANYTHING!";
	else{?>

	<form name ='summary' action='summary.php' method='POST'>
					<input type='number' name='no_biryani' value="<?php echo $no_1;?>" hidden></input>
				
					<input type='number' name='no_mutton' value="<?php echo $no_2;?>" hidden></input>
					<input type='number' name='no_fried'  value="<?php echo $no_3;?>" hidden></input>

					<input type='number' name='no_veg'  value="<?php echo $no_4;?>" hidden></input>

					<input type='number' name='no_pasta'  value="<?php echo $no_5;?>" hidden></input>

					<input type ='submit' name='submit' value='GET SUMMARY'></input>
	</form>

</center>
<?php }?>
</div>
</body>
</html>
