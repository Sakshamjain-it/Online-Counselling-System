<h1><b>CHOOSE THE CLIENT</h1>
<?php

include 'dbconnect.php';


$sql="select username from users where id>0";
//echo $sql;
//die();
$result=mysqli_query($conn,$sql);
//echo $result;

$opt="<select name='username'>
<option>select name</option>" ;
while($row=mysqli_fetch_assoc($result)){
	$opt .="<option value='{$row['username']}'>{$row['username']}</option>";
}
$opt.="/select>";
?>
<form method="post" action="coun_sess_set.php">

<?php 
echo $opt;
?>

<input type="submit" value="submit">
</form>
<!DOCTYPE HTML>
<html>
<head></head>
<body background="wa3.jpg" style="background-size: cover; ">

	</body>
	</html>

		 
