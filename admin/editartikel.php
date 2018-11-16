<?php include("../config/aksesadmin.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Web Artikel Sederhana</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script> 
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="page-header" style="text-align: center;">
            <h1 class="judul">WEB ARTIKEL</h1>
            <h3 class="deskripsi">Web Artikel Sederhana dengan PHP dan MySQL</h3>
        </header>

        <div class="container">

            <div class="navigation">
                <ul class="nav nav-tabs" style="background-color: #E7E7E7;">
                    <li role="presentation"><a href="admin.php">HOME ADMIN</a></li>
                    <li role="presentation"><a href="tambahartikel.php">POSTING</a></li>
                    <li class="active"><a data-toggle="tab" href="listartikel.php">LIST ARTIKEL</a></li>
                    <li role="presentation"><a href="../config/logout.php">LOGOUT</a></li>
                </ul>
            </div>

            <?php
                include("../config/koneksi.php");
                $id=$_GET['id'];
                $temp=$_GET['temp'];
                $query="SELECT * FROM tbl_artikel WHERE id_artikel = $id";
                $result=mysqli_query($conn,$query)or die('query gagal'.mysqli_error());
                $row=mysqli_fetch_array($result);
            ?>                                                  

            <form method="post" action="../config/proseseditartikel.php" class="form-horizontal col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="form-group">
                        <input readonly hidden="true" type="text" name="id" value="<?php echo $row[0];?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $row[1];?>" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="penulis">Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="<?php echo $row[2];?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="isi">Isi</label>
                        <textarea name="isi" id="isi" class="form-control" cols="50" rows="20"><?php echo $row[3];?></textarea>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Edit" />
                  </p>
                </div>
            </form>
        </div>
    </body>
</html>
