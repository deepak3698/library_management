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
view form</title>
</head>
<body>
<h1>BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
<form action="searching.php" method="post">
<table border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Author</th>
<th>Date</th>
<th>Class</th>
<th>NO Of Books</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result)
?>
	<tr>
	<td><?php echo $i;  ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['price'];  ?></td>
	<td><?php echo $row['author']; ?></td>
	<td><?php echo $row['Date']; ?></td>
	<td><?php echo $row['class']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
	</tr>
<?php	
}	
?>
<tr>
<td><input type="text" name="nn" placeholder="search here"/></td>
<td colspan="3"><input type="submit" value="search"/></td>
</tr>
</table>
</form>
<h1>
GO TO HOME PAGE<a href="home.php">click here</a></h1></br>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>