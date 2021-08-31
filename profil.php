<!DOCTYPE html>
<html>
<?php
    include('head.php');
    include "navbar.php";
?>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    session_start();
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {

        $username=$_SESSION["username"];

        //Query input menginput data kedalam tabel anggota
        $sql="SELECT * FROM user WHERE username = '$username'";

        //Mengeksekusi/menjalankan query diatas
        $hasil = mysqli_query($kon, $sql);
        $data = mysqli_fetch_assoc($hasil);
?>
  

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="container mb-5">
      <!-- INI PROFIL -->
      <div class="card mt-4" style="border-radius: 5px; border-width: 2px;">
        <h5 class="card-header" style="background-color: #ffc107;">Profil</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <input name="gender" value="<?= $data['gender'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea type="text" name="alamat" class="form-control" rows="3"><?= $data['alamat'] ?></textarea>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>No. HP</label>
              <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control">
            </div>
          </form>
        </div>
      </div>

      <!-- INI PENGALAMAN KERJA -->
      <div class="card mt-4" style="border-radius: 5px; border-width: 2px;">
        <h5 class="card-header" style="background-color: #ffc107;">Pengalaman Kerja</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" name="instansi" value="<?= $data['instansi'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Posisi</label>
              <input type="text" name="posisi" value="<?= $data['posisi'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Kontribusi</label>
              <textarea type="text" name="kontribusi" class="form-control" rows="4"><?= $data['kontribusi'] ?></textarea>
            </div>
          </form>
        </div>
      </div>

      <!-- INI PENDIDIKAN -->
      <div class="card mt-4" style="border-radius: 5px; border-width: 2px;">
        <h5 class="card-header" style="background-color: #ffc107;">Pendidikan Terakhir</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label>Institusi/Universitas</label>
              <input type="text" name="institusi" value="<?= $data['institusi'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Ijazah Terakhir</label>
              <input name="ijazah" value="<?= $data['ijazah'] ?>" class="form-control">
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php  
        }
    ?>
    </form>
</div>

<?php include('footer.php') ?>
</body>
</html>