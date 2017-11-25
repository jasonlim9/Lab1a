<link href="colour.css" rel="stylesheet">
<html>
<body>
<b><center>PRODUCTS</center></b>


<?php
$con = mysqli_connect("localhost","root","","swap"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
?>

<?php
$id=$_POST['idnum'];
$showprod=$con->prepare("select productID,productName,price,size,colour,category,quantity from products WHERE productID='". $id ."'");
$showprod->execute();
$showprod->bind_result($productID,$productName,$price,$size,$colour,$category,$quantity);
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>Product ID</th>";
echo "<th>Product Name</th>";
echo "<th>Price</th>";
echo "<th>Size</th>";
echo "<th>Colour</th>";
echo "<th>Category</th>";
echo "<th>Quantity</th>";
echo "</tr>";
while($showprod->fetch())
{
	echo "<tr>";
	echo "<td>".$productID."</td>";
	echo "<td>".$productName."</td>";
	echo "<td>".$price."</td>";
	echo "<td>".$size."</td>";
	echo "<td>".$colour."</td>";
	echo "<td>".$category."</td>";
	echo "<td>".$quantity."</td>";
	echo "</tr>";	
	
}
echo "</table>";
?>


<form action="display_update_data.php" method="post">
<table align='center'>
	<br>
	<tr>
		<td>Please Enter New Product Name:</td> <td><input type="text" name="name" required="" /></td>
	</tr>
		<tr>
		<td>Please Enter New Product Price:</td> <td><input type="number" min="1" name="price" required="" /></td>
	</tr>
		<tr>
		<td>Please Enter New Product Size:</td> <td><input type="text" name="size" required="" /></td>
	</tr>
		<tr>
		<td>Please Enter New Product Colour:</td> <td><input type="text" name="colour" required="" /></td>
	</tr>
		<tr>
		<td>Please Enter New Product Category:</td> <td><input type="text" name="cat" required="" /></td>
	</tr>
		<tr>
		<td>Please Enter New Product Quantity:</td> <td><input type="number" min="1" name="quan" required="" /></td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $id ?>" /></td>
	</tr>
	<tr>
		<td><button type="submit" value="Submit" class="button" style="vertical-align:middle"><span>Press to make changes</span></button></td>
		<td><a href="askupdatedata.php"><button type="button" class="button" style="vertical-align:middle"><span>Return to select productID</span></button></a></td>
		
	</tr>
</table>

</form>
	
</body>
</html>