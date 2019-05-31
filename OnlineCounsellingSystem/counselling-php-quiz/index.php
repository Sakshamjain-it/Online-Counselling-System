 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Personal Counseling</title>
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
          <h1>Counseling Quiz</h1>
  </div>
      </header>

      <main>
      <div class="container">
        <h2>Have a test through Quiz!!</h2>
	<p>This is a multiple choice quize to test your knowledge about something</p>
	<ul>
		<li><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li><strong>Type: </strong>Multiple Choice</ul>
		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</ul>
	</ul>
	<a href="question.php?n=1" class="start">Start Quiz</a>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      	   
      </div>
    </footer>
  </body>
</html>