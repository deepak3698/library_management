<?php
$size=sizeof($_POST);
$record=$size/7;
for($i=1;$i<=$record;$i++)
{
	$index1="id".$i;
	$id[$i]=$_POST[$index1];
	$index2="name".$i;
	$name[$i]=$_POST[$index2];
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
	$index5="date".$i;
	$date[$i]=$_POST[$index5];
	$index6="class".$i;
	$class[$i]=$_POST[$index6];
	$index7="quantity".$i;
	$quantity[$i]=$_POST[$index7];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
for($i=1;$i<=$record;$i++)
{
$q="update book SET name='$name[$i]',price=$price[$i],author='$author[$i]',Date='$date[$i]',class='$class[$i]',quantity='$quantity[$i]' where id=$id[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);	
?>
<!DOCTYPE html>
<html>
<title>
updation</title>
</head>
<body>
<h1>BOOK RECORD SYSTEM</h1>
<p><?php 
	echo "record updated";
?>
</p>
go to home page<a href="home.php">click here</a><br>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>

</body>
</html>