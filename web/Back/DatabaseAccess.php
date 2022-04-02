<?php session_start(); ?> 
 <?php
 //change as need to match databases in postgresql bench
$host = "ec2-54-173-77-184.compute-1.amazonaws.com";
$user = "nqrktkrhwsacrx";
$port = "5432";
$dbname = "d2sndh45ug1s14";
$password = "244935e23ffa0329220089ab7e13c7aeb3858ee8e2c4508bdcd675d4a7079497";
// Create connection
$conn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user  . ";password=" . $password;
// Check connection
try{
	$pdo = new PDO($conn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo 'it works'; 
}
catch(PDOException $e){
	echo 'failed to connect' . $e->getMessage();
}
?>
