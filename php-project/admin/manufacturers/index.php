<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>This is manufacturers zone</h1>
<a href="form_insert.php">
	Add
</a>

<?php
include '../menu.php'
?>


<?php
require_once '../connect.php';
$sql = "select * from manufacturers";
$result = mysqli_query($connect, $sql);
mysqli_close($connect);
?>

<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Photo</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['name'] ?></td>
			<td><?php echo $each['address'] ?></td>
			<td><?php echo $each['phone'] ?></td>
			<td>
				<img width="200" src="<?php echo $each['photo'] ?>">
			</td>
		</tr>
	<?php endforeach ?>
</table>
</body>

</body>
</html>