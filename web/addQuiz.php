<?Php session_start();
  include 'Back/DatabaseAccess.php';
  //this is a query to make sure the quiz table is not empty
  $sqlQuizzes = "SELECT quizid FROM quiz";
  $Quizzes = $pdo->prepare($sqlQuizzes);
  $Quizzes->execute();
  $rowcount = $Quizzes->rowcount();
  $result = $Quizzes->fetchALL();
  if ($rowcount->num_rows > 0) {
    $sqlQuiz = "INSERT INTO quiz VALUES ($num_rows + 1, 0, 0)";
    $newQuiz = $pdo->prepare($sqlQuiz);
    $newQuiz->execute();
  } else {
    $sqlQuiz = "INSERT INTO quiz VALUES (1, 0, 0)";
    $newQuiz = $pdo->prepare($sqlQuiz);
    $newQuiz->execute();
  }
  $sqlNewQuiz = "SELECT MAX(quizid) FROM quiz";
  $newestQuiz = $pdo->prepare($sqlNewQuiz);
  $newestQuiz->execute();
  echo '<div class="card" style="width: 18rem; id = "'.$newestQuiz.'">';
?>