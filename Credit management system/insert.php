<?php
session_start();
$tablename= $_SESSION['$username'];
$bookid=$_POST['bookid'];
$title=$_POST['title'];
$price=$_POST['price'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
echo $i;
$q="insert into $tablename (bookid,title,price) values ($bookid,'$title',$price)";
mysqli_query($con,$q);
?>