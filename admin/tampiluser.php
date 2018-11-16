<!DOCTYPE html>
<html>
<head>
	<title>Daftar User</title>
</head>
<body>

	<?php  
		include 'koneksi.php';
		$query = mysqli_query($conn,"SELECT no,kode_user,nama_user,hak_akses FROM tbl_user ORDER BY no DESC");

	?>

	<form action="" method="GET">
		<table border="1" align="center">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode User</th>
					<th>Nama User</th>
					<th>Hak Akses</th>
				</tr>
			</thead>
			<tbody>
			
			<?php 
				while ($row = mysqli_fetch_array($query)) {
					echo '<tr>
					<td>'.$row['no'].'</td>
					<td>'.$row['kode_user'].'</td>
					<td>'.$row['nama_user'].'</td>';

					if ($row['hak_akses']=="2") {
						echo '<td>User</td>';
					} elseif ($row['hak_akses']=='1') {
						echo '<td>Admin</td></tr>';
					}
				}
			?>
			</tbody>
		</table>
	</form>

</body>
</html>