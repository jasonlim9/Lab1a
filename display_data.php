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
$showprod=$con->prepare("select * from products WHERE productID='". $id ."'");
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

<br>
<table align='center'>
<tr>
<td> <a href="display_all.php"><button class="button" style="vertical-align:middle"><span>Back to home</span></button></td>
</tr> </table>

</body>
</html>

	
	