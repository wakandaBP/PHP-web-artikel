<?php include("../config/aksesadmin.php"); ?>

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
				<li class="active"><a data-toggle="tab" href="admin.php">HOME ADMIN</a></li>
				<li role="presentation"><a href="tambahartikel.php">POSTING</a></li>
				<li role="presentation"><a href="listartikel.php">LIST ARTIKEL</a></li>
				<li role="presentation"><a href="../config/logout.php">LOGOUT</a></li>
			</ul>
		</div>
		
		<h1 style="text-align: center;">HELLO ADMIN</h1>

		<div>
			Daftar Artikel yang diposting: 
			<br />
			<?php
				include "../config/koneksi.php";

				$result=mysqli_query($conn,"SELECT * FROM tbl_artikel ORDER BY id_artikel");
				if(!$result){
					die('sql error: '.mysqli_error($conn));
				}

				echo "<ol>";

				while($row=mysqli_fetch_row($result)){
					echo "<li><a href=\"artikeladmin.php?id={$row[0]}\">{$row[1]}</a></li>";  
				}
				echo "</ol>";
			?>
		</div>
	</div>
</body>
</html>
