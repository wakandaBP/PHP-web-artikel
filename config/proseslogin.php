<?php
    include "../config/koneksi.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    }

    $result = mysqli_query($conn,"SELECT * FROM tbl_user WHERE nama_user='$username' AND password='$password'");
    $cek = mysqli_num_rows($result);

    if($cek > 0){
        
        $row = mysqli_fetch_row($result);

        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['hakakses'] = $row[5];

        if($row[5] == 'A'){
            $_SESSION['admin'] = $username;
            $_SESSION['kodeuser'] = $row[0];
            header("Location: ../admin/admin.php");
        } else {
            $_SESSION['guest'] = $username;
            $_SESSION['kodeuser'] = $row[0];
            header("Location: ../user/homeuser.php");
        }
    } 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

</body>
</html>