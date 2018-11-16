<?php
@ob_start();
session_start();

include("../config/koneksi.php");

$query = mysqli_query($conn,"SELECT count(*) AS jumlah FROM tbl_artikel");
$result = mysqli_fetch_array($query);
$i = $result['jumlah'];
$pk = $i+1;

$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$isi=$_POST['isi'];
$query="insert into tbl_artikel (id_artikel,judul_artikel,penulis_artikel,isi_artikel)values ('$pk','$judul','$penulis','$isi')";
if (mysqli_query($conn,$query)) {
echo "<script language=\"javascript\">alert('Data Anda Berhasil Diinput');
 window.location.href = \"../admin/listartikel.php\";
</script>"; 
   
} else {
    echo "Error: " . $query . "<br>" . mysql_error($conn);
}

mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tambah</title>
</head>

<body>

</body>
</html>