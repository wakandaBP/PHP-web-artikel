<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update</title>
</head>

<body>
<?php
	
	include ("../config/koneksi.php");

	$a=$_POST['judul'];
	$b=$_POST['penulis'];
	$c=$_POST['isi'];
	$pk=$_POST['id'];
	
	$query = "UPDATE tbl_artikel SET judul_artikel='$a', penulis_artikel='$b', isi_artikel='$c' WHERE id_artikel='$pk'";
		
	if(mysqli_query($conn,$query)){

		echo "<script language=\"javascript\">alert('Data Anda Berhasil Diupdate');
		window.location.href = \"../admin/listartikel.php\";
		</script>";
				
		} else {
			echo "gagal".mysqli_error();
		}
	 
	// Close connection
	mysqli_close($conn);
		
	?>
</body>

</html>
