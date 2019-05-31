<?php
session_start();
session_destroy();
header("Location:/online_counselling/main.php");
?>