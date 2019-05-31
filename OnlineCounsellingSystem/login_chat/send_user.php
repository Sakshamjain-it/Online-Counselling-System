<?php
session_start();
include 'dbconnect.php';
$msg=$_POST['msg'];
$name=$_SESSION['username'];
$usid=$_SESSION['user'];

echo $name;
/*echo $usid;
echo $name;
echo $msg;*/
$sql="insert into posts(msg,name,sender_uid,reciever_uid) values('$msg','$name','$usid',0)";
$result=$conn->query($sql);
header("Location:chat_user.php");
?>