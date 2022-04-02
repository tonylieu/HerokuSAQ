<?php session_start(); ?> 
<?php  include 'DatabaseAccess.php';?> 
<html>
<body>
<script>
function Hello() {
	<?Php
	$Sname = $_SESSION["StudentID"];
	$sqlHello = 'UPDATE student SET Attendence = 1 WHERE StudentID = '.$Sname;
	$hello = $pdo->prepare($sqlHello);
	$hello->execute();
	?>
}
</script>
</body>
</html>