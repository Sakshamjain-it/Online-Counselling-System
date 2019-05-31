<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login_coun.php");
    exit;
}
// select logged in users detail
$res = $conn->query("SELECT * FROM counsellor WHERE id=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
$_SESSION['coun_nm']=$userRow['coun_name'];
?>
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hello, COUNSELLOR</title>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
     <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar-->
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

                <li class="active"><a href="chat_coun.php">Chat</a></li>
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
        <h1 id="hello" >Hello <?php echo($_SESSION['coun_nm']);?></h1>
        <p id="demo"></p>
  
  <img class="img-responsive" src="q7.png" alt="Chania" width="720" height="800"> 
        <p> </p>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <u><h2 id="hello2"></h2></u>
            <div id="para">
        
            </div>

        </div>


    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html> 
               