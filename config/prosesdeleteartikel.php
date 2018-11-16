<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hapus</title>
</head>

<body>
<?php
	include('../config/koneksi.php');
	$id=$_GET['id'];

    $hapus=mysqli_query($conn,"DELETE FROM tbl_artikel WHERE id_artikel='$id'") or die ('query gagal'.mysqli_error());
			if ($hapus){
			
             echo "<script language=\"javascript\">alert('Data Anda Berhasil Dihapus');
			 window.location.href = \"../admin/listartikel.php\";
			 
			 </script>"; 
					//header("location:inputmenu.php");	
			}
    ?>
</body>
</html>
