 <?php session_start(); ?> 
<html>
<body>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<style>
body {background-color: powderblue;}
body {background-image: url('GreenBackground.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;}
 .block {
  display: block;
  width: 50%;
  border: none;
  background-color: #D3D3D3;
  color: white;
  padding: 14px 8px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}

 </style>
<form action="Back/ProfessorVerify.php" method="post">
<input type="text" name="Pname" placeholder="ProfessorID"><br>
 <input type="text" name="pass" placeholder="Password"><br>
<input type="submit">
</form>
<a href='LoginPage.html' class = "block">Go Back</button></a>

</body>
</html>