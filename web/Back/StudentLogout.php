<?php
$sqlName = $_SESSION["StudentID"];
$sqlBye = 'UPDATE student SET Attendance = 0 WHERE StudentID =' .$sqlName.;
$goodbye = $pdo->prepare($sqlBye);
$goodbye->execute();
$rowCount = $goodbye->rowcount();
$details = $goodbye-fetch();
if ($details = 0) {
echo "Record updated successfully";
}else {
echo "Error updating record: " . $conn->error;
}

header("location: ../LoginPage.html");

?>
