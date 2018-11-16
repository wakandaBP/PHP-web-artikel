<?php
	@ob_start();
	session_start();

	include("../config/koneksi.php");

	$subjek = $_POST['subjek'];
	$isi = $_POST['isikomentar'];

	$idartikel = $_SESSION['id_artikel'];
	$iduser = $_SESSION['kodeuser'];

	$query = "INSERT INTO tbl_komentar (id_artikel,subjek,komentar,kode_user) VALUES ('$idartikel','$subjek','$isi','$iduser')";
	if (mysqli_query($conn,$query)) {
		echo "<script language=\"javascript\">alert('Komentar Anda Berhasil Diinput');
		 window.location.href = \"../user/artikeluser.php?id=$idartikel\";
		</script>"; 
		   
	} else {
		    echo "Error: " . $query . "<br>" . mysql_error($conn);
	}

	mysqli_close($conn);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tambah Komentar</title>
</head>

<body>

</body>
</html>