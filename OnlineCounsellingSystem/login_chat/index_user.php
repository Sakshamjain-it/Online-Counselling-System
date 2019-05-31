<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
// select logged in users detail
$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>login_in </title>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
     <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    


    <style>
* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<!-- Navigation Bar-->
<?php 
$_SESSION['usermail'] = $userRow['email'];
$_SESSION['username'] = $userRow['username']; 
 ?>
<nav id="nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="brand" class="navbar-brand" href="#">Counselling <i class="fa fa-superpowers" aria-hidden="true"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li><a href="chat_user.php">Chat <i class="fa fa-handshake-o" aria-hidden="true"></i></a></li>
                <li><a href="/counselling-php-quiz/index.php">QUIZ <i class="fa fa-paper-plane-o" aria-hidden="true"></i></a></li>
                </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span
                            class="glyphicon glyphicon-user"></span>&nbsp;Logged
                        in: <?php echo $userRow['email']; ?>
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Jumbotron-->
    <div class="jumbotron">
        <h1 id="hello" >Hello, <?php echo($_SESSION['username']);?></h1>
        <p id="demo"><b>PERSONAL COUNSELLING</b><br>
        <meta charset="utf-8">
  


<div class="container" >
  <h2><b>MOTIVATIONAL THOUGHTS</b></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="q5.png" alt="inspiration" style="width:100%; height: 600px; ">
      </div>

      <div class="item">
        <img src="q6.png" alt="inspiration" style="width:100%; height: 600px">
      </div>
    
      <div class="item">
        <img src="q3.png" alt="inspiration" style="width:100%; height: 600px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 </p>
        
    </div>

    



<h1>MOTIVATIONAL VIDEOS</h1><hr>

<div class="row">
  <div class="column" >
    <iframe width="250" height="200" src="https://www.youtube.com/embed/y04OcY_4ttU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  <div class="column" >
    <iframe width="250" height="200" src="https://www.youtube.com/embed/ron2VyQcISQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  <div class="column" >
    <iframe width="250" height="200" src="https://www.youtube.com/embed/TluGisD8Tlk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  <div class="column" >
    <iframe width="250" height="200" src="https://www.youtube.com/embed/4ByMJE8k_u8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <br>

    <p style="text-align:left;"> For more inspiration videos<a href="https://www.youtube.com/results?search_query=sandeep+maheshwari">
    <br> <b><i> Click here</i></b></a></p>
    
  </div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>

            
