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
		
			<?php
				include "../config/koneksi.php";
				$id = $_GET['id'];
				$query1 = mysqli_query($conn,"SELECT * FROM tbl_artikel WHERE id_artikel='$id'");
				while($result1 = mysqli_fetch_array($query1)){
					echo "<h2>".$result1['judul_artikel']."</h2>";
					echo "<h3><i>Oleh: ".$result1['penulis_artikel']."</i></h3>";
					echo "<p>".$result1['isi_artikel']."</p>";
				}
			?>

			<form action="../config/proseskomentar.php" method="POST">
				<div class="panel" style="border-top : thin solid #808080; margin-top: 20px;">
                    <div class="panel-heading">
                        <h2>Komentar</h2>
                    </div>
                    <div class="panel-body">
                    	<div>
                    		<label for="judulkomentar">Judul</label>
                    		<input type="text" class="form-control" id="judulkomentar" placeholder="Judul" />
                    	</div>

                        <div class="form-group">
                            <label for="isikomentar">Isi</label>
                            <textarea class="form-control" id="isikomentar" rows="8" name="" placeholder="Isi Komentar"></textarea> 
                        </div> 
                    </div>
                    <div class="panel-footer">
                        <input type="submit" class="btn btn-primary" value='Submit'>
                    </div>
                </div>
            </form>
            
            <div style="margin-top: 1%;">
	            <?php
	            	$iduser = $_SESSION['kodeuser'];

					$result = mysqli_query($conn,"SELECT * FROM tbl_komentar WHERE id_artikel = '$id' ORDER BY no");
					
					if(!$result && !$nama){
						die('sql error: '.mysqli_error($conn));
					}

					while($row = mysqli_fetch_row($result)){
						echo "<div  style='border-top: thin solid #b0b5bc;'>";
						$nama = mysqli_query($conn,"SELECT nama FROM tbl_user WHERE kode_user = ".$row[4]);
						
						while($row1 = mysqli_fetch_row($nama)){
							echo "<h4>Oleh : ".$row1[0]."</h4>";
						}
						echo "<p>".$row[3]."</p></div>";
						
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
