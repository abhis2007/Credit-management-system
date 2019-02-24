<?php
session_start();
$tablename=$_SESSION['$username'];
$title=$_POST['title'];
$newtitle=$_POST['newtitle'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
$q="UPDATE $tablename SET title=$newtitle where title=$title";
mysqli_query($con,$q);
?>