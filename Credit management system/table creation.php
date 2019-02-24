<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
$q="insert into login (username,password) values ('$username','$password')";
mysqli_query($con,$q);
mysqli_close($con);
?>