<?php include("../config/aksesadmin.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Artikel Sederhana</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<style type="text/css">th{text-align: center; text}</style>
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
				<li role="presentation"><a href="tambahartikel.php">POSTING</a></li>
				<li class="active"><a data-toggle="tab" href="listartikel.php">LIST ARTIKEL</a></li>
				<li role="presentation"><a href="../config/logout.php">LOGOUT</a></li>
			</ul>
		</div>

		<h3>Daftar artikel yang diposting</h3>

		<table class="table table-bordered table-striped table-condensed" style="margin-top: 10px;">
			<thead>
				<tr>
					<th>ID Artikel</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Isi</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include("../config/koneksi.php");
				$result=mysqli_query($conn,"SELECT * FROM tbl_artikel ORDER BY id_artikel");
				if(!$result){
					die('sql error: '.mysqli_error($conn));
				}

				while($row=mysqli_fetch_row($result)){
					echo "<tr align=\"center\"><td>$row[0]<td>$row[1]<td>$row[2]<td class=\"isi\">$row[3]<td>
						<a href=\"editartikel.php?id=$row[0]&temp=$row[0]\">Edit</a><br>
						<a href=\"../config/prosesdeleteartikel.php?id=$row[0]\">Delete</a>";
				}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>