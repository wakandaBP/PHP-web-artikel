<?php
	include("../config/aksesadmin.php"); 
	include("../config/koneksi.php");

	$query = "SELECT max(id_artikel) as maxID FROM tbl_artikel";
	$result = mysqli_query($conn,$query);
	$data  = mysqli_fetch_array($result);
	$id = $data['maxID'] + 1;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Artikel Sederhana</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</head>

<body>
	<header class="page-header" style="text-align: center;">
		<h1 class="judul">WEB ARTIKEL</h1>
		<h3 class="deskripsi">Web Artikel Sederhana dengan PHP dan MySQL</h3>
	</header>

	<div class="container">

		<div class="navigation">
			<ul class="nav nav-tabs" style="background-color: #E7E7E7;">
				<li role="presentation"><a href="admin.php">HOME ADMIN</a></li>
				<li class="active"><a data-toggle="tab" href="tambahartikel.php">POSTING</a></li>
				<li role="presentation"><a href="listartikel.php">LIST ARTIKEL</a></li>
				<li role="presentation"><a href="../config/logout.php">LOGOUT</a></li>
			</ul>
		</div>

		<div class="badan">
			<div style="text-align: center;">
				<form action="../config/prosestambah.php" method="POST" class="form-horizontal col-md-6 col-md-offset-3">
					<h3>Input Artikel</h3>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="judul">ID Artikel</label>
						<div class="col-sm-10">
							<input readonly class="form-control" type="text" name="id" id="id" value="<?php echo $id ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="judul">Judul</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="judul" id="judul" placeholder="Judul">
						</div>
					</div>
					<div class="form-group">		
						<label class="col-sm-2 control-label" for="penulis">Penulis</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="penulis" id="penulis" placeholder="Penulis">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="isi">Isi</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="isi" id="isi" cols="30" rows="10" placeholder="Isi"></textarea>
						</div>
					</div>
					<input type="submit" name="submit" class="btn btn-primary" value="Tambahkan">
				</form>
			</div>
		</div>

	</div>
</body>
</html>