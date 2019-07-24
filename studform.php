<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
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
insertion form</title>
</head>
<body>
<div class="a">
<?php
echo $_SESSION['k'];
?>
</div>
<h1>BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
<form action="studinsert.php" method="post">
<table>
<tr>
<th>Id</th>
<td><input type="text" name="title" placeholder="student ID" Required/></td>
</tr>
<tr>
<th>NAME</th>
<td><input type="text" name="price" placeholder="Student name"  Required/></td>
</tr>
<tr>
<th>CLASS</th>
<td><input type="text" name="author" placeholder="Student class" ></td>
</tr>
<tr>
<th>bookissue</th>
<td><input type="text" name="booki" placeholder="bookname" ></td>
</tr>
<tr>
<th>DATE</th>
<td><input type="text" name="date" placeholder="date" ></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="insert"></td>
</tr>
</table>
</form>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>
