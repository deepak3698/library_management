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
h1{color:red;}
</style>
</head>

<title>
home page</title>
</head>
<body style="background-color:pink">

<h1 align="center" style="color:blue">*****BOOK RECORD SYSTEM OF KALANI COLLEGE*****</h1>
<div class="a">
<?php
echo $_SESSION['k'];
?>
</div>
<h1 title="insert your data">INSERT<a href="insertionform.php">click here</a></h1>

<h1 title="view your data">VIEW<a href="view.php">click here</a></h1>
<h1 title="delete your data">DELETE<a href="deleteform.php">click here</a></h1>
<h1 title="update your data">UPDATE<a href="updateform.php">click here</a></h1>
<h1 title="search your data">SEARCH RECORDS<a href="search.php">click here</a></h1>
<h2><a href="logout.php">logout</a><h2>
<hr>
<i style="position:absolute; bottom:5px;background-color:pink">CREATED BY DEEPAK TIWARI</i>
</body>
</html>