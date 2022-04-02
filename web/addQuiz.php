<?Php
  include 'Back/DatabaseAccess.php';
  //this is a query to make sure the quiz table is not empty
  $numQuizzes = "SELECT COUNT(quizid) FROM quiz";
  $countCheck = $pdo->prepare($numQuizzes);
  $countCheck->execute();
  if ($countCheck > 0) {
    $sqlQuiz = "INSERT INTO quiz VALUES ($countCheck + 1, 0, 0)";
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