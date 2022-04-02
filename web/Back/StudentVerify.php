<?php session_start(); ?> 
 <?php $name = $_POST["Sname"]; ?>
 <?php
 include 'DatabaseAccess.php';
//this will be replace with an input statment
$studentNum = $name;
//the student number will be the username
//the sqlID works echo $sqlID;
$sqlID = 'SELECT StudentID From Student where StudentID = '. $studentNum;
//the studnet SSN will be the password
$IDcheck = $pdo->prepare($sqlID);
$IDcheck->execute();
$rowCount = $IDcheck->rowcount();
if($rowCount > 0){
	$_SESSION["StudentID"] = $name;
	header("location: ../StudentModel.php");
}
else{
	echo " wrong ID";
	header("location: ../studentLogin.php");
}
?>