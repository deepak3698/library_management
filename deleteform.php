<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
?>

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
<head>
<style>

div.a{

  position: absolute;
  right: 0;
  width: 150px;
  height: 50px;
  border: 3px solid blue;

}
</style>
<title>
delete form</title>
</head>
<body>
<div class="a">
<?php
echo $_SESSION['k'];
?>
</div>
<h1>BOOK RECORD SYSTEM</h1>
<form action="deletion.php" method="post">
<table border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Author</th>
<th>DATE</th>
<th>NO OF BOOK</th>
<th>Select To Delete</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result)
?>
	<tr>
	<td><?php echo $i  ?></td>
	<td><?php echo $row['name'] ?></td>
	<td><?php echo $row['price']  ?></td>
	<td><?php echo $row['author'] ?></td>
	<td><?php echo $row['Date'] ?></td>
	<td><?php echo $row['quantity']; ?><input type="hidden" value="<?php echo $row['quantity']; ?>" /></td>
	<td><input type="checkbox" value="<?php echo $row['id']; ?>" name="b<?php echo $i; ?>"/></td>
	</tr>
<?php	
}	
?>
<tr>
<td><input type="submit" value="delete"/></td</tr>
</table>
</form>
GO TO HOME PAGE<a href="home.php">click here</a>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>