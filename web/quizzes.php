<!DOCTYPE html>
<?php session_start(); ?> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1D40EF;
  overflow-x: hidden;
  padding-top: 20px;

}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
  
}

.sidenav a:hover {
  color: #FFD700;  
  background:  radial-gradient(circle at top left, blue 10px, white 11px);
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
<?php include 'Back/DatabaseAccess.php';?>
<div class="sidenav">
<!--this will be a slidebar and have create Quiz, Edit Quiz, push Quiz-->
  <a href="quizzes.php">Quiz</a>
<!--this slidebar can upload Notes and delete notes-->
  <a href="#Notes">Notes</a>
<!--this is for view grades of all student-->
  <a href="#Grades">Grades</a>
<!-- this is a button that create  a qr code-->
    <a href="#Qr">Qr code</a>
  <a href="#create">CreatePS</a>
  <!-- change href to a php that cancels the session for php-->
  <a href='index.php' class = "block">Logout</button></a>
  <p> &nbsp;&nbsp;&nbsp;</p>
  <img src="GSUsymbol.jpg" width="100" height="100">
</div>
<div class="main">
  <h2>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <button id="addQuiz">Add Quiz</button>
  </div>
  </div>
  </div>
  <?Php

	//this is a query to get all the current quizzes in the database

  $sqlQuizzes = "SELECT quizid FROM quiz";
  $Quizzes = $pdo->prepare($sqlQuizzes);
  $Quizzes->execute();
  $rowcount = $Quizzes->rowcount();
  $result = $Quizzes->fetchALL();

	//this is to create cards for each quiz

	if ($rowcount->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       //this will create a card for every row in the database	
	    echo '<div class="card" style="width: 18rem; id = "'.$row["quizid"].'">';
	    echo '<div class= "card-body">';
      echo '<h5 class="card-title">'.$row["quizid"];
      print 'Quiz ' + $row["quizid"];
      echo '</h5>';
      echo '<a href="editQuiz.php" class="btn btn-primary">Edit Quiz';
      echo '</a>';
      echo '<a href="quizzes.php" class="btn btn-primary">Delete Quiz';
      echo '</a>';
	    echo '</div>';
	    echo '</div>';
	    echo '<p> &nbsp;&nbsp;&nbsp;</p>';
	  }
  }
  echo '<div id="result">';
  echo '</div>';
  
  ?>
</h2>
</div>
<script>
  let btn = document.getElementById("addQuiz");
  btn.addEventListener("click", function() {
    fetch("addQuiz.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
      },
    })
    .then((response) => response.text())
    .then((res) => (document.getElementById("result").innerHTML = res));
  })
</script>
</body>
</html>