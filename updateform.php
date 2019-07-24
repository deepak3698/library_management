<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<title>
update form</title>
</head>
<body>
<h1>BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
<form action="update.php" method="post">
<table border="1" style="background-color:pink">
<tr>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Author</th>
<th>Date</th>
<th>Class</th>
<th>No Of Books</th>

</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result)
?>
	<tr>
	<td><?php echo $i  ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id'];  ?>"/></td>
	<td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>"/></td>
	<td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price']; ?>"/></td>
	<td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author']; ?>"/></td>
	<td><input type="text" name="date<?php echo $i; ?>" value="<?php echo $row['Date']; ?>"/></td>
	<td><input type="text" name="class<?php echo $i; ?>" value="<?php echo $row['class']; ?>"/></td>
	<td><input type="text" name="quantity<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>"/></td>
	</tr>
<?php	
}	
?>
</table>
<input type="submit" value="update"/>
</form>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>