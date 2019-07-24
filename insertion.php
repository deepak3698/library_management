<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
?>
<?php 
$name=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$date=$_POST['date'];
$class=$_POST['class'];
$qt=$_POST['q'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
$q="INSERT INTO book(name,price,author,Date,class,quantity)
values('$name',$price,'$author','$date','$class','$qt')";
$st=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
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
insertion</title>
</head>
<body>
<div class="a">
<?php
echo $_SESSION['k'];
?>
</div>
<h1 align="center" style="color:blue">BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
<p><?php 
if($st==1)
	echo "RECORD INSERTED";
else
	echo "NOT INSERTED"
?>
</p>
<h1>ADD MORE RECORDS<a href="insertionform.php">click here</a></h1><br>
<h1>GO TO HOME PAGE<a href="home.php">click here</a></h1>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>

</body>
</html>



