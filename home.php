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
				<li class="active"><a data-toggle="tab" href="home.php">HOME</a></li>
				<li role="presentation"><a href="login.php">LOGIN</a></li>
				<li role="presentation"><a href="daftar.php">REGISTER</a></li>
			</ul>
		</div>
		
		<div style="background-color: #aad8e6; margin-top: 3%;"><marquee direction="left"><h2>Selamat Datang!</h2></marquee></div>
		<div style="margin-top: 4%;">
			Daftar Artikel yang tersedia: 
			<br />
			<?php
				include "config/koneksi.php";

				$result=mysqli_query($conn,"SELECT * FROM tbl_artikel ORDER BY id_artikel");
				if(!$result){
					die('sql error: '.mysqli_error($conn));
				}

				echo "<ol>";

				while($row=mysqli_fetch_row($result)){
					echo "<li><a href=\"artikel.php?id={$row[0]}\">{$row[1]}</a></li>";  
				}
				echo "</ol>";
			?>
		</div>
	</div>
</body>
</html>
