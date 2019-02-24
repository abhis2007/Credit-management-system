<?php
session_start();
$tablename=$_SESSION['$username'];
$price=$_POST['price'];
$newprice=$_POST['newprice'];
$con=mysqli_connect('localhost','root');
$i=mysqli_select_db($con,'db2');
$q="UPDATE $tablename SET price=$newprice where price=$price";
mysqli_query($con,$q);
?>