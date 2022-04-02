 <?php session_start(); ?> 
<?php
 include 'DatabaseAccess.php';
$sqlName = $_SESSION["StudentID"];
$sqlBye = 'UPDATE student SET Attendence = 0 WHERE StudentID =' .$sqlName;
$goodbye = $pdo->prepare($sqlBye);
$goodbye->execute();
$rowCount = $goodbye->rowcount();
$details = $goodbye->fetchAll();
if ($details = 0) {
echo "Record updated successfully";
}else {
echo "Error updating record: ";
}

header("location: ../index.php");

?>
