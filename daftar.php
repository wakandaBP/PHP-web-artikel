<?php
	include("config/koneksi.php");
	$query = "SELECT max(kode_user) as maxID FROM tbl_user";
	$result = mysqli_query($conn,$query);
	$data  = mysqli_fetch_array($result);
	$id = $data['maxID'] + 1;

?>

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
				<li role="presentation"><a href="login.php">LOGIN</a></li>
				<li class="active"><a data-toggle="tab" href="daftar.php">REGISTER</a></li>
			</ul>
		</div>

		<div class="badan">
			<div style="text-align: center;">
				<form action="config/prosesdaftar.php" method="POST" class="form-horizontal col-md-6 col-md-offset-3">
					<h3>Daftar User Baru</h3>
					<div class="row" style="margin-top: 4%;">
						<div class="form-group">
							<label class="col-sm-2 control-label" for="iduser">ID User</label>
							<div class="col-sm-10">
								<input readonly class="form-control" type="text" name="iduser" id="iduser" value="<?php echo $id ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="username">Username</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="username" id="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">		
							<label class="col-sm-2 control-label" for="nama">Nama</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="email">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="email" id="email" placeholder="Email"></input>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="password">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password"></input>
							</div>
						</div>
						<input type="submit" name="submit" class="btn btn-primary" value="Daftar">
					</div>
				</form>
			</div>
		</div>

	</div>
</body>
</html>