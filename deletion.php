<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
?>

<?php 
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}	
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
for($k=1;$k<=$size;$k++)
{  
		$q="delete from book where id=".$b_id[$k];
	    mysqli_query($con,$q);
}
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
deletion</title>
</head>
<body>
<div class="a">
<?php
echo $_SESSION['k'];
?>
</div>
<h1>BOOK RECORD SYSTEM</h1>
<p><?php 
	echo $size." record deleted";
?>
</p>
<h1>GO TO HOME<a href="home.php">click here</a></h1><br>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>
	

	