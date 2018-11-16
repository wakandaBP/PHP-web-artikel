<?php
session_start();

if($_SESSION['hakakses'] == "A") {
	header("location:../admin/index.php");
} elseif ($_SESSION['hakakses'] == "G") {
	header("location:../login.php");
}

session_destroy();

?>