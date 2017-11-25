<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Product</title>
</head>
<link href="colour.css" rel="stylesheet">

<body>
	<form action="update_data.php" method="post">
	<h1> Update Product </h1>
	<table>
	<tr>
		<td>Please Enter Product ID number: <input type="number" min="1" name="idnum" required=""/></td>
	</tr>
	<tr>
		<td><button type="submit" value="Submit" class="button" style="vertical-align:middle"><span>Press to Update data</span></button></td>
	</tr>
	</form>
	<td><a href="display_all.php"><button type="button" class="button" style="vertical-align:middle"><span>Return to home</span></button></a></td>
</body>
</html>
