<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Product</title>
</head>
<link href="colour.css" rel="stylesheet">

<body>
	<form action="insert_data.php" method="post">
	<h1> Insert Product </h1>
		<table>
			<tr>
				<td>Please Enter Product ID number:</td><td><input type="number" min="1" name="prodid" required="" /></td>
			</tr>
			<tr>
				<td>Please Enter Product Name:</td><td><input type="text" name="prodname" required=""/></td>
			</tr>
			<tr>
				<td>Please Enter Product Price:</td><td><input type="number" min="1" name="prodprice" required="" /></td>
			</tr>
			<tr>
				<td>Please Enter Product Size:</td><td><input type="text" name="prodsize" required="" /></td>
			</tr>
			<tr>
				<td>Please Enter Product Colour:</td><td><input type="text" name="prodcolour" required="" /></td>
			</tr>
			<tr>
				<td>Please Enter Product Category:</td><td><input type="text" name="prodcat" required="" /></td>
			</tr>
			<tr>
				<td>Please Enter Quantity:</td><td><input type="number" min="1" name="prodquan" required="" /></td>
			</tr>
			<tr>
				<td><button type="submit" value="Submit" class="button" style="vertical-align:middle"><span>Press to Insert data</span></button></td>
			</tr>
	</form>
	<td><a href="display_all.php"><button type="button" class="button" style="vertical-align:middle"><span>Return to home</span></button></a></td>
		</table>
</body>
</html>