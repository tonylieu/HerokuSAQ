<?php session_start(); ?> 
<html>
<body>
<script>
function Hello() {
	<?Php
	$Sname = $_SESSION["StudentID"];
	$sqlHello = "UPDATE student SET Attendance = '1' WHERE (StudentID = '".$Sname."');";
	if (pg_query($conn, $sqlHello)) {
	echo "Record updated successfully";
	}else {
	echo "Error updating record: " . $conn->error;
}
	?>
}
</script>
</body>
</html>