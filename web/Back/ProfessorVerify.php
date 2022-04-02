 <?php session_start(); ?> 
<html>
<body>
 <?php $name = $_POST["Pname"];
$Pass = $_POST["pass"]; ?>
 <?php
 include 'DatabaseAccess.php';
//this will be replace with an input statement
$ProfessorNum = $name;
$password = $Pass;
//the student number will be the username
//the sqlID works echo $sqlID;
$sqlID = "SELECT ProfessorID From Professor where ProfessorID = ". $ProfessorNum;
$sqlPass = "SELECT Password From Professor where ProfessorID = ". $ProfessorNum;
$sqlLName = "SELECT ProfessorNameL From Professor where ProfessorID = ". $ProfessorNum;
$IDcheck = $pdo->prepare($sqlID);
$IDcheck->execute();
$PassCheck = $pdo->prepare($sqlPass);
$PassCheck->execute();
$LastName = $pdo->prepare($sqlLName);
$LastName->execute();
$LName = $LastName->fetchAll();
$IDrowcount = $IDcheck->rowcount();
$passrowcount = $PassCheck->rowcount();
if($IDrowcount > 0 && $passrowcount > 0){
		$_SESSION["ProfessorID"] = $name;
		$_SESSION["Password"] = $Pass;
		$ProfessorL = $LName['ProfessorNameL'];
		$_SESSION["PLastName"] = $ProfessorL;
		header("location: ../ProfessorModel.php");
}
else{
	echo " wrong ID";
	header("location: ../ProfessorLogin.html");
}
?>
</body>
</html>