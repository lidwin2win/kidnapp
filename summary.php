<html>
<head>
	<link rel="stylesheet" href="style.css"></link>
</head>
<body>

<center>
<div id='section'>
<table border=5 width=1000 height=300>

	<tr>
		<td><b><center>ITEM ORDERED</b></center></td>
		<td><center><b>Rate per quantity</b></center></td>
		<td>QUANTITY</td>
	<tr>

	<?php

		$no_1=$_POST['no_biryani'];
		$no_2=$_POST['no_mutton'];
		$no_3=$_POST['no_fried'];
		$no_4=$_POST['no_veg'];
		$no_5=$_POST['no_pasta'];
?>


	<tr>
		<?php if($no_1!=0){?>
			<td>Chicken Biryani</td>
			<td>Rs.90</td>
			<td><?php echo $no_1;?></td>
		<?php } ?>
	</tr>

	<tr>

		<?php if($no_2!=0){?>
			<td>Chicken Fried Rice</td>
			<td>Rs.100</td>
			<td><?php echo $no_2;?></td>
		<?php }?>
	</tr>

	<tr>
		<?php if($no_3!=0){?>
			<td>Mutton Biryani</td>
			<td>Rs.150</td>
			<td><?php echo $no_3;?></td>
		<?php }?>
	</tr>

	<tr>
		<?php  if($no_4!=0){?>
			<td>Vegetable Biryani</td>
			<td>Rs.80</td>
			<td><?php echo $no_4;?></td>
		<?php }?>
	</tr>

	<tr>
		<?php  if($no_5!=0){?>
			<td>Pasta</td>
			<td>Rs.110</td>
			<td><?php echo $no_5;?></td>
		<?php }?>
	</tr>


	<tr2>
		<td class='css'>TOTAL AMOUNT</td>

		<?php $total = $no_1*90 + $no_2*100 + $no_3*150 + $no_4*80 + $no_5*110;

		?>
		<td class='css'><?php echo "Rs.".$total;?></td>
	</tr>
</table>


<br><br>
<form action="back_end.php" method='POST'>

					<input type='number' name='no_biryani' value="<?php echo $no_1;?>" hidden></input>
				
					<input type='number' name='no_mutton' value="<?php echo $no_2;?>" hidden></input>
					<input type='number' name='no_fried'  value="<?php echo $no_3;?>" hidden></input>

					<input type='number' name='no_veg'  value="<?php echo $no_4;?>" hidden></input>

					<input type='number' name='no_pasta'  value="<?php echo $no_5;?>" hidden></input>

					<input type ='submit' name='submit' value='INSERT INTO DATABASE'></input>
	</form>


</div>
</center>

</body>
</html>

