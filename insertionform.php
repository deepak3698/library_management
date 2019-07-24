<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/mypr/login1.php');
?>
<!DOCTYPE html>
<html>
<title>
insertion form</title>
</head>
<body>
<h1>BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
<form action="insertion.php" method="post">
<table>
<tr>
<th>Name</th>
<td><input type="text" name="title" placeholder="book name" Required/></td>
</tr>
<tr>
<th>Price</th>
<td><input type="text" name="price" placeholder="book price"  Required/></td>
</tr>
<tr>
<th>Author</th>
<td><input type="text" name="author" placeholder="book author" ></td>
</tr>
<tr>
<tr>
<th>Date</th>
<td><input type="text" name="date" placeholder="date of book receiving" ></td>
</tr>
<tr>
<th>Class</th>
<td><input type="text" name="class" placeholder="class" ></td>
</tr>
<th>Quantity</th>
<td><input type="text" name="q" placeholder="no of book" ></td>
</tr>

<th></th>
<td><input type="submit" value="insert"></td>
</tr>
</table>
</form>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>
