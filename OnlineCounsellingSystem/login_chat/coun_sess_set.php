<?php
if (isset($_POST['username'])){
echo $_POST['username'];

session_start();
$_SESSION['username']=$_POST['username'];
$selected_user=$_SESSION['username'];
}
else echo 'no';
include 'dbconnect.php';
$sql="SELECT * from users where username='$selected_user' ";
$result=mysqli_query($conn,$sql);
while ($row = $result->fetch_assoc()) {
	 $_SESSION['selected_userid']=$row['id'];
	
	header("Location:coun_user_chat.php");
}
?>
	

