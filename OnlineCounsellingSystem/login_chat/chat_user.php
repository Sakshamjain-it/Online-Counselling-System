<?php
session_start();
include 'dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>chat</title>
<link rel="stylesheet" type="text/css" href="chat_user.css">
</head>
<body background="tenor.gif"    " style="background-size: cover; ">
<div id="main">
<h1 style="background-color:orange;color:white;">
<?php
$usid= $_SESSION['user'];

?>
<?php echo($_SESSION['username']);?>  -online</h1>
<div class="output">

<?php $sql="select * from posts where reciever_uid='$usid' or sender_uid='$usid'; ";

$result=$conn->query($sql);

if($result->num_rows>0)
{
	//output data of each row
	while($row=$result->fetch_assoc()){
		if($row["sender_uid"]==0)
		{
		echo "<div style='color:red;position: absolute;left: 20px;'>"."".$row["name"]."  "."::".$row["msg"]."-->>".$row["date"]."<br>"."</div>";
		
		echo "<br>";
		}
		else
		{		echo "<div style='color:blue;position: absolute;right: 50px;'>"."".$row["name"]."  "."::".$row["msg"]."-->".$row["date"]."<br>"."</div>";
		
		echo "<br>";

		}
	}
}
	else
	{
		echo "no conversation with counsellor yet!!";
	}
$conn->close();
?>
</div>
<form method="post" action="send_user.php">
<textarea name="msg" placeholder="type to send message..." class="form-control"></textarea><br>
<input type="submit" value="send">
</form>
<br>
<form action="index_user.php">
<input style="width:100%;background-color:orange;color:white;font-size:20px;" type="submit" value="End chat">
</form>
</div>
</body>
</html>