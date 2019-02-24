<?php
$tablename=$_POST['table'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db2');
$q="create table $tablename (bookid int(5) NOT NULL,title varchar(250),price float(8.2))";
mysqli_query($con,$q);
mysqli_close($con);
?>