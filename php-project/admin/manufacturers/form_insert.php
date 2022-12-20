<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include '../menu.php';
?>

<form action="process_insert.php" method="post">
	Name
	<input type="text" name="name">
	<br>
	Address
	<textarea name="address"></textarea>
	<br>
	Phone 
	<input type="text" name="phone">
	<br>
	Photo
	<input type="text" name="photo">
	<br>
	<button>Add</button>
</form>
</body>
</html>