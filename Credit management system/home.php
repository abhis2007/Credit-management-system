<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DELETING DATA</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	.decoration{
		color:#191919;
	}
	#news{
		background-color:orange;
		font-family:cursive;
	}
	span{
	font-family:cursive;
	}
	.col-xs-5{
		border:1px solid red;
	}
    </style>
</head>
<body>
<div class="container-fluid ">
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5">
				<span><h2>Hello,<?php echo $_SESSION['$username'];?></h2></span>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <p><label><span>Enter serial no:</span></label></p>
                        <input type="number" class="form-control" placeholder="enter serial no" name="bookid" />
                    </div>
                    <div class="form-group">
                        <p><label><span>Enter title:</span></label></p>
                        <input type="text" class="form-control" placeholder="enter particulars" name="title" />
                    </div>
                    <div class="form-group">
                        <p><label><span>Enter price:</span></label></p>
                        <input type="text" class="form-control" placeholder="enter price" name="price" />
                    </div>
                    <button class="btn btn-primary"><span>insert</span></button>
                </form>
                <h5><a href="delete.html"><span>click here to delete the entry of account.</span></a></h5>
                <p><a href="select data.php"><button class="btn btn-primary"><span>Click here to view</span></button></a>
                <h5><a href="update book.html"><span>click here to update the entry of account.</span></a></h5>
            </div>
			<div class="col-xs-2"></div>
            <div class="col-xs-4">
			    <p ><div id="news">if u are using for first time please create your credit account otherwise u may suffer problem!</div></P>
				<div><a class="decoration" href="creditopen.html"><span>click here to create credit account</span></a></div>
				<a href="logout.php">Logout</a>
			</div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>





































































































