
<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
?>
<?php 
$id=$_POST['title'];
$name=$_POST['price'];
$class=$_POST['author'];
$book=$_POST['booki'];
$date=$_POST['date'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
$q="INSERT INTO stud(sid,sname,sclass,book,Date)
values($id,'$name','$class','$book',$date)";
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