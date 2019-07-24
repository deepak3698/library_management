<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
$p=$_POST['nn'];
$q="select * from book where name LIKE '$p%'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<style>
tr{color:#FF338A;}
th{color:blue;}
td{color:black;}
</style>
<title>
searched form</title>
</head>
<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
?>
<body>
<h1>BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
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
if($num>=1)
{
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
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
}
else
{
	echo "reult not found";
}	
?>

</table>
<h1>GO TO HOME PAGE<a href="home.php">click here</a></h1></br>
<h1>GO TO SEARCHING PAGE <a href="searchingg.php">click here</a></h1></br>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>