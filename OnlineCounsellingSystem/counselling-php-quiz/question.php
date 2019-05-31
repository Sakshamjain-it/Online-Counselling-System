
<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
  //Set question number
  $number = (int) $_GET['n'];

  //Get total number of questions
  $query = "select * from questions";
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total=$results->num_rows;

  // Get Question
  $query = "select * from `questions` where question_number = $number";

  //Get result
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $question = $result->fetch_assoc();


  // Get Choices
  $query = "select * from `choices` where question_number = $number";

  //Get results
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<<html>
  <head>
    <meta charset="utf-8" />
    <title>PERSONAL COUNSELLING</title>
    <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body background="wa4.jpg" style="background-size: cover; ">
    <div id="container">
      <header>
        <div class="container">
          <h1 id="demo1">Counseling Quiz</h1>
	</div>
      </header>

      <main>
      <div class="container">
        <div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
	<p class="question">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php">
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" required />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
	      <input type="submit" value="submit" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      	   
      </div>
    </footer>
  </body>
</html>