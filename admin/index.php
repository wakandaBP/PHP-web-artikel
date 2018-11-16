<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>    
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</head>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 15%">
                <form action="../config/proseslogin.php" method="POST">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">Form Login</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username"> 
                            </div> 
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" name='submit' class="btn btn-success btn-block" value='Login'>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>