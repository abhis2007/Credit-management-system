<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        form {
            border: 2px solid silver;
            padding: 10px 40px;
            margin-top: 10px;
            -webkit-box-shadow: 5px 8px 75px 5px rgba(0,0,0,0.39);
            -moz-box-shadow: 5px 8px 75px 5px rgba(0,0,0,0.39);
            box-shadow: 5px 8px 75px 5px rgba(0,0,0,0.39);
        }
        img{
            height:35%;
            padding-bottom:10%;
            padding-left:30%;
			}
        h1{
            font-size:158%;
            padding-left:20%;
            padding-bottom:5%;
            font-weight:bold;
            font-family:Arial, Helvetica, sans-serif;
           
        }
        label{
            font-size:20px;
            font-family:Arial, Helvetica, sans-serif;
        }
		.image{
			position:relative;
			right:40px;
		}
		body {
  background-image:url('images/bb.jfif');
  background-repeat:no-repeat;
  background-size:contain;
}
    </style>
</head>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12"></div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <form action="validation.php" method="post">
					<h1>Login here</h1>
                    <div class="image"><img class="img img-responsive" src="images/login.jfif"/></div>
                    <div class="form-group">
                        <p><label>USERNAME:</label></p>
						<input type="text" class="form-control" name="username" placeholder="username" />
                    </div>
                    <div class="form-group">
                        <p><label>PASSWORD:</label></p>
                        <input type="password" class="form-control" name="password" placeholder="password" />
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" />Remember me</label>
                    </div>
					<div class="row">
					<div class="col-xs-5"><a href="table creation.html">new account<a></div>
					<div class="col-xs-7"><a href="#">forgot password</a></div>
					</div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12"></div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

















































































































