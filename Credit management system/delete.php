<?php
session_start();
$tablename=$_SESSION['$username'];
$bookid=$_POST['bookid'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
$q="delete from $tablename where bookid=$bookid";
mysqli_query($con,$q);
?>