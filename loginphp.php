
<?php
session_start();
$n=$_POST['un'];
$p=$_POST['pw'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
$q="select * from login where username='$n' && password='$p'";
$st=mysqli_query($con,$q);
$num=mysqli_num_rows($st);
if($num==1)
{
	$_SESSION['k']="welcome $n";
	header('location:http://localhost/mypr/home.php');
}
else
{ 
	header('location:http://localhost/mypr/login2.php');
}

?>