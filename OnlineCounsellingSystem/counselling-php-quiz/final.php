 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	// $query="select * from shouts order by time desc limit 100";
	// $shouts = mysqli_query($con,$query);
  
 ?>
<!DOCTYPE html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Personal Counseling</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body background="wa4.jpg" style="background-size: cover; ">
    <div id="container">
      <header>
        <div class="container">
          <h1>Counseling Quiz!</h1>
  </div>
      </header>


      <main>
	<div class="container">
	     <h2>You are Done!</h2>
	     <p>Congrats! You have completed the test</p>
	     <p>Final socre: <?php echo $_SESSION['score']; ?></p>
	     <a href="question.php?n=1" class="start">Take Test Again</a>
	     <?php session_destroy(); ?>
	</div>
      </main>
      <div>
        <p> SCORE less than 10 : No counselling Required</p>
          <br>
          <p>SCORE between 10 to 20 : Counselling can be done or not</p>
            <br>
            <p>SCORE above 20 : Counselling highly recommended!!</p>
          </div>



    <footer>
      <div class="container">
         <a href="/login_chat/login_user" target="_blank" class="btn btn-info" role="button">Chat with counsellor</a>
      </div>
    </footer>
  </body>
</html>