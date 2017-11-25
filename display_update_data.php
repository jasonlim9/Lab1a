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
$prodid=$_POST['id'];
$prodname=$_POST['name'];
$prodprice=$_POST['price'];
$prodsize=$_POST['size'];
$prodcolour=$_POST['colour'];
$prodcat=$_POST['cat'];
$prodquan=$_POST['quan'];

$updateprod=$con->prepare("UPDATE products SET productName = '$prodname', price = '$prodprice', size = '$prodsize', colour = '$prodcolour', category = '$prodcat', quantity = '$prodquan' WHERE productID='". $prodid ."'");
$updateprod->execute();

if ($updateprod->execute())
{  										//execute query
  echo "<table align='center'>";
  echo "<tr>";
  echo "<th>Product successfully updated.</th>";
  echo "</tr>";
}


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

echo "<tr>";
echo "<td>".$prodid."</td>";
echo "<td>".$prodname."</td>";
echo "<td>".$prodprice."</td>";
echo "<td>".$prodsize."</td>";
echo "<td>".$prodcolour."</td>";
echo "<td>".$prodcat."</td>";
echo "<td>".$prodquan."</td>";
echo "</tr>";	
echo "</table>";

?>

<table align='center'>
<tr><br>
<td> <a href="display_all.php"><button class="button" style="vertical-align:middle"><span>Back to home</span></button></td>
</tr></table>

</body>
</html>