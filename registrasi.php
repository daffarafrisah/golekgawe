<?php
require 'function.php';

if(isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script> alert('Akun berhasil dibuat.') </script>";
    } else {
        echo mysqli_error($kon);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
include('navbar.php');
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-dark login-box" style="padding-top: 30px; padding-bottom: 106px;">
                    <div class="panel-heading"><h4 class="text-center" style="padding-bottom: 12px;">Mulai Dengan Gratis</h4></div>
                    <div class="panel-body">
                        <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                        </div>                        
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>              
                        <hr>
                            <button type="submit" name="register" class="btn btn-warning raised btn-block">Daftar</button>
                        <hr>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <div class="text-center">
                            <a class="small">Sudah punya akun?</a>
                            <a href="home.php" style="text-decoration: none; font-size: 80%; font-weight: 400;">Masuk sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>    
        </div>
        
    </form>
    </div>
    <?php include('footer.php') ?>    
</body>
</html>