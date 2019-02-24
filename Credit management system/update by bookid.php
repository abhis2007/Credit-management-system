<?php
session_start();
$tablename=$_SESSION['$username'];
$bookid=$_POST['bookid'];
$newbookid=$_POST['newbookid'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
$q="UPDATE $tablename SET bookid=$newbookid where bookid=$bookid";
mysqli_query($con,$q);
?>