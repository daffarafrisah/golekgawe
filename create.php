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
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        // menghilangkan karakter slash
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username=input($_POST["username"]);
        $nama=input($_POST["nama"]);
        $gender=input($_POST["gender"]);
        $alamat=input($_POST["alamat"]);
        $email=input($_POST["email"]);
        $no_hp=input($_POST["no_hp"]);
        $instansi=input($_POST["instansi"]);
        $posisi=input($_POST["posisi"]);
        $kontribusi=input($_POST["kontribusi"]);
        $institusi=input($_POST["institusi"]);
        $ijazah=input($_POST["ijazah"]);

        //Query input menginput data kedalam tabel anggota
        $sql="INSERT INTO user (username, nama, gender, alamat, email, no_hp, instansi, posisi, kontribusi, institusi, ijazah)
        values ('$username','$nama','$gender','$alamat','$email','$no_hp','$instansi','$posisi','$kontribusi','$institusi','$ijazah')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon, $sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location:profil.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
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
              <input type="text" name="username" class="form-control" placeholder="Username anda">
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama lengkap anda">
            </div>
            <div class="form-group">
            <label>Jenis Kelamin</label>
              <select name="gender" class="form-control">
                <option selected disabled>Pilih</option>
                <option>Laki Laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea type="text" name="alamat" class="form-control" rows="3" placeholder="Masukan alamat"></textarea>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Masukan email">
            </div>
            <div class="form-group">
              <label>No. HP</label>
              <input type="text" name="no_hp" class="form-control" placeholder="Masukan nomer HP">
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" name="instansi" class="form-control" placeholder="Nama instansi atau perusahaan">
            </div>
            <div class="form-group">
              <label>Posisi</label>
              <input type="text" name="posisi" class="form-control" placeholder="Posisi atau divisi anda">
            </div>
            <div class="form-group">
              <label>Kontribusi</label>
              <textarea type="text" name="kontribusi" class="form-control" rows="4"></textarea>
            </div>
            <br>
            <hr>
            <br>
            <div class="form-group">
              <label>Institusi</label>
              <input type="text" name="institusi" class="form-control" placeholder="Nama institusi atau universitas">
            </div>
            <div class="form-group">
            <label>Ijazah Terakhir</label>
              <select name="ijazah" class="form-control">
                <option selected disabled>Pilih</option>
                <option>Sekolah</option>
                <option>Diploma</option>
                <option>Sarjana</option>
                <option>Magister</option>
                <option>Lainnya...</option>
              </select>
            </div>
            <br>
          </form>
        </div>
      </div>

      <!-- INI PENGALAMAN KERJA -->
      <!-- <div class="card mt-4" style="border-radius: 5px; border-width: 2px;">
        <h5 class="card-header" style="background-color: #ffc107;">Pengalaman Kerja</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label>Instansi</label>
              <input type="text" name="instansi" class="form-control"placeholder="Nama instansi atau perusahaan">
            </div>
            <div class="form-group">
              <label>Posisi</label>
              <input type="text" name="posisi" class="form-control"placeholder="Posisi atau divisi anda">
            </div>
            <div class="form-group">
              <label>Kontribusi</label>
              <textarea type="text" name="kontribusi" class="form-control" rows="4"></textarea>
            </div>
          </form>
        </div>
      </div> -->
      <div class="button mt-3 text-center">
        <button type="submit" class="btn btn-success btn-block" alert="OOps"><b>Simpan</b></button>
      </div>
    </div>
    </form>
</div>

<?php include('footer.php') ?>
</body>
</html>