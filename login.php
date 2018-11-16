<!DOCTYPE html>
<html>
<head>
	<title>Web Artikel Sederhana</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<body>
	<header class="page-header" style="text-align: center;">
		<h1 class="judul">WEB ARTIKEL</h1>
		<h3 class="deskripsi">Web Artikel Sederhana dengan PHP dan MySQL</h3>
	</header>

	<div class="container">

		<div class="navigation">
			<ul class="nav nav-tabs" style="background-color: #E7E7E7;">
				<li role="presentation"><a href="home.php">HOME</a></li>
				<li class="active"><a data-toggle="tab" href="login.php">LOGIN</a></li>
                <li role="presentation"><a href="daftar.php">REGISTER</a></li>
			</ul>
		</div>

		<div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 1%">
                <form action="config/proseslogin.php" method="POST">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title" style="text-align:center; border-bottom: thin solid #808080; padding-bottom: 20px;"><h3><b>Login</b></h3></div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username"> 
                            </div> 
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" name="submit" class="btn btn-primary col-md-offset-5" value='Login'>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>