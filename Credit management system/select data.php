<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>account detail</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
		<?php
			session_start();
			$tablename=$_SESSION['$username'];
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'db2');
			$q="select * from $tablename";
			$result=mysqli_query($con,$q);
			$num=mysqli_num_rows($result);
			for($i=1;$i<=$num;$i++){
			$row=mysqli_fetch_array($result);
			echo $row['bookid']." ".$row['title']." ".$row['price'];
			echo "<br>";
			}
			mysqli_close($con);
		?>
		</div>
		<div class="col-xs-4"></div>
	</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>





























































