<?php
session_start();
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="chat_coun.css">
</head>
<body background="tenor.gif"    " style="background-size: cover; ">
<div id="main">
<h1 style="background-color:orange;color:white;">
<?php
echo $_SESSION['coun_nm'];
$selected_userid=$_SESSION['selected_userid']
?>
-online</h1>
<div class="output">
<?php $sql="select * from posts where reciever_uid='$selected_userid' or sender_uid='$selected_userid'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	//output data of each row
	while($row=$result->fetch_assoc()){
			if($row["sender_uid"]==0)
		{
		echo "<div style='color:blue;position: absolute;right: 50px;'>"."".$row["name"]."  "."::".$row["msg"]."-->>".$row["date"]."<br>"."</div>";
		
		echo "<br>";
		}
		else
		{		echo "<div style='color:red;position: absolute;left: 20px;'>"."".$row["name"]."  "."::".$row["msg"]."-->".$row["date"]."<br>"."</div>";
		
		echo "<br>";

		}
		//echo "".$row["name"]."  "."::".$row["msg"]."--".$row["date"]."<br>";
		
		//echo "<br>";
	}
}
	else
	{
		echo "0 results";
	}
$conn->close();
?>
</div>
<form method="post" action="send_coun.php">
<textarea name="msg" placeholder="type to send message..." class="form-control"></textarea><br>
<input type="submit" value="send">
</form>
<br>
<form action="index_coun.php">
<input style="width:100%;background-color:orange;color:white;font-size:20px;" type="submit" value="End chat">
</form>
</div>
</body>
</html>