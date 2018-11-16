<?php
@ob_start();
session_start();

include("../config/koneksi.php");

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$hakakses = "G";

$query = "INSERT INTO tbl_user (nama_user,nama,email,password,hak_akses) VALUES ('$username','$nama','$email','$password','$hakakses')";

if (mysqli_query($conn,$query)) {
echo "<script language=\"javascript\">alert('Anda Berhasil Mendaftar, Silahkan login menggunakan username dan password Anda');
 window.location.href = \"../login.php\";
</script>"; 
//header("location:index.php");

   
} else {
    echo "Error: " . $query . "<br>" . mysql_error($conn);
}

mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Daftar</title>
</head>

<body>

</body>
</html>