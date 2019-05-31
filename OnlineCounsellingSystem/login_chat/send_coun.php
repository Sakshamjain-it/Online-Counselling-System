<?php
session_start();
include 'dbconnect.php';
$msg=$_POST['msg'];
$name=$_SESSION['coun_nm'];
$selected_userid=$_SESSION['selected_userid'];
//echo $usid;
$sql="insert into posts(msg,name,sender_uid,reciever_uid) values('$msg','$name',0,'$selected_userid')";
$result=$conn->query($sql);
header("Location:coun_user_chat.php");
?>