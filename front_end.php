

<html>
<head>
	<link rel="stylesheet" href="style.css"></link>
</head>
<body>

	<div id='header'>
	<h1><center>RESTAURANT MENU</center></h1>
	</div>

	<div id='section'>
	<table border=5 width=1000 >
		<tr>
			<th><center><b>Menu Items</b></center></th>

			<th><center><b>Rate per quantity</b></center></th>

			<th><center><b>quantity</b></center></th>
		</tr>

		<tr height=30>
			<td><center><b>Chicken Biryani</b></center></td>

			<td><center><b>Rs.90</b></center></td>

			<td rowspan=5><center><b>

				<form name='quantity' action="curr_total.php" method='POST'>

					<input type='number' name='no_biryani' min='0' value='0'></input><br><br><br>
				
					<input type='number' name='no_mutton' min='0' value='0'></input><br><br><br>

					<input type='number' name='no_fried' min='0' value='0'></input><br><br><br>

					<input type='number' name='no_veg' min='0' value='0'></input><br><br><br>

					<input type='number' name='no_pasta' min='0' value='0'></input><br><br><br>

					<input type ='submit' name='submit' value='Get current total'></input>

				</form>
		


			</b></center></td>
		</tr>

		<tr height =30>
			<td><center><b>Chicken Fried Rice</b></center></td>

			<td><center><b>Rs.100</b></center></td>



		</tr>

		<tr height=30>
			<td><center><b>Mutton Biryani</b></center></td>

			<td><center><b>Rs.150</b></center></td>

			
		</tr>

		<tr height=30>
			<td><center><b>Vegetable Biryani</b></center></td>

			<td><center><b>Rs.80</b></center></td>

			
		</tr>

		<tr height=60>
			<td><center><b>Pasta</b></center></td>

			<td><center><b>Rs.110</b></center></td>

			
		</tr>




	</table>
</div>
</body>
</html>





