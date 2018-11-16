<?php
//membuat koneksi
$conn = mysqli_connect("localhost","root","","artikel");
//$tbl = "tbl_artikel";

//cek koneksi
if (!$conn) {
	die("Koneksi Error : ".mysqli_connect_error());
}
?>