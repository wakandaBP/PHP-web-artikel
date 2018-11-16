<?php include("../config/aksesuser.php"); ?>

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
				<li role="presentation"><a href="homeuser.php">HOME</a></li>
				<li class="active"><a data-toggle="tab" href="profiluser.php">PROFIL USER</a></li>
				<li role="presentation"><a href="../config/logout.php">LOGOUT</a></li>
			</ul>
		</div>
		
		<div style="margin-top: 4%;">
			<?php
				include("../config/koneksi.php");
				$id = $_SESSION['kodeuser'];
				$query="SELECT * FROM tbl_user WHERE kode_user = $id";
				$result=mysqli_query($conn,$query)or die('query gagal'.mysqli_error());
				$row=mysqli_fetch_array($result);
			?>                                                  
			<form method="post" action="../config/prosesedituser.php" class="form-horizontal col-md-6 col-md-offset-3">
				<div class="row">
					<div class="form-group">
				  		<label class="control-label" for="iduser">ID User</label>
				  		<input readonly type="text" name="iduser" class="form-control" value="<?php echo $row[0];?>"/>
				  	</div>
				  	<div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $row[1];?>" />
					</div>
				  	<div class="form-group">
						<label class="control-label" for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $row[2];?>" />
					</div>
					<div class="form-group">
						<label class="control-label" for="email">Email</label>
						<input type="text" name="email" class="form-control" value="<?php echo $row[3];?>" />
					</div>
					<div class="form-group">
						<label class="control-label" for="hakakses">Hak Akses</label>
						<input readonly type="text" name="hakakses" class="form-control" value="Guest"/>
					</div>
			    	<input type="submit" name="Submit" value="Edit" class="btn btn-primary" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>