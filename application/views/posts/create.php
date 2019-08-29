<h6><?=$title; ?></h6>

<head>
	<a href="<?php echo base_url(); ?>/home" >HOME</a>
	<title>Drink Menu</title>
	<style>

	</style>
</head>
<body>

<h1>Welcome to Kwame's Bar</h1>
<h3>Please Select  drink</h3>

<?php echo form_open('posts/create'); ?>
	<table>
		<th colspan="4">Drink Selection</th>
		<tr>
			<td><strong>Type</strong></td>
			<td><strong>Name</strong></td>
			<td><strong>Price</strong></td>
			<td><strong>Quantity</strong></td>
		</tr>
		<tr>
			<td>Whiskey</td>
			<td><input type="text" name="Drink" value="Jack and Coke" readonly>Jack and Coke</td>
			<td>5.99</td>
			<td>
				<select name="drinkQuan">
					<option>0</option>
					<option value="one">1</option>
					<option value="two">2</option>
					<option value="three">3</option>
					<option value="four">4</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4"><input type="submit" name="submit" value="Order"></td>
		</tr>
	</table>
</form>
</body>
