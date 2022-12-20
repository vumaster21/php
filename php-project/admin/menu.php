<ul>
	<li>
		<a href="../manufacturers">
			Producer Management
		</a>
	</li>
</ul>
<?php
if(isset($_GET['error'])) {
	?>
	<span style="color: red;">
		<?php echo $_GET['error']; ?>
	</span>

	<?php		
}
?>
<?php
if(isset($_GET['success'])) {
	?>
	<span style="color: green;">
		<?php echo $_GET['success']; ?>
	</span>

	<?php		
}
?>