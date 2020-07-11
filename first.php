<!DOCTYPE html>
<html>
<head>

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<title>
Welcome the University of Ibadan networking
</title>
</head>
<div class="page-header" >
<h1 class="text-danger">University of Ibadan Student Network</h1>
</div>
<body class="bg-danger">
<h1><b class="text-primary">We are the number one networking page fo the University of Ibadan</b></h1>

<div class="jumbotron">
<form method="post"  enctype ="multipart/form-data"class="form-horizontal">
		<div class="form-group">
	<input type="submit" class="btn  btn-primary btn-lg  btn-block" Placeholder='Business' value="Student"name='student'>
</div>
<br>
	<div class="form-group">
	<input type="submit" class="btn  btn-success btn-lg  btn-block" Placeholder='Business' value="Business"name='business'>
</div>
</div>
	
</form>
</div>
</div>
</body>
<footer>&copy; Copyright 2020 Zaye</footer>
</html>

<?php


if(isset ($_POST['business'])){
header('Location: Adminfirst.php');
}
if(isset ($_POST['student'])){
	header('Location: first page.php');
}

?>
