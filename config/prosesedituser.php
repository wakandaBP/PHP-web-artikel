<?php include("../config/aksesuser.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Profil</title>
</head>

<body>
<?php
	
	include ("../config/koneksi.php");

	$a=$_POST['username'];
	$b=$_POST['nama'];
	$c=$_POST['email'];
	
	session_start();

	$pk=$_SESSION['kodeuser'];
	
	$query = "UPDATE tbl_user SET nama_user='$a', nama='$b', email='$c' WHERE kode_user='$pk'";
		
	if(mysqli_query($conn,$query)){

		echo "<script language='javascript'>alert('Data Anda Berhasil Diupdate');
		window.location.href = '../user/profiluser.php';
		</script>";
				
		} else {
			echo "gagal".mysqli_error();
		}
	 
	// Close connection
	mysqli_close($conn);
		
?>
</body>

</html>
