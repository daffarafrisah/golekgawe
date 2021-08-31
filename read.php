<!DOCTYPE html>
<html>
<?php
    include('head.php');
    include ('navbarx.php');
?>
<body>
<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_user
    if (isset($_GET['id_user'])) {
        $id_user=htmlspecialchars($_GET["id_user"]);

        $sql="delete from user where id_user='$id_user' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:read.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>
    <div class="filter" style="margin-top: 2%; margin-left: 2%;">
    <form action="" method="post">
        <div class="form-group">
        <input type="text" class="form-control" name="filter">
        </div>
        <button type="submite" class="btn btn-warning" name="cari">Cari</button>
    </form>
    </div>

    <table class="table table-bordered">
        <br>
        <thead style="background-color: white; text-align: center;">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Instansi</th>
            <th>Posisi</th>
            <th>Kontribusi</th>
            <th>Institusi</th>
            <th>Ijazah</th>

        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $sql="select * from user order by id_user desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["username"];   ?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["gender"];   ?></td>
                <td><?php echo $data["alamat"];   ?></td>
                <td><?php echo $data["email"];   ?></td>
                <td><?php echo $data["no_hp"];   ?></td>
                <td><?php echo $data["instansi"];   ?></td>
                <td><?php echo $data["posisi"];   ?></td>
                <td><?php echo $data["kontribusi"];   ?></td>
                <td><?php echo $data["institusi"];   ?></td>
                <td><?php echo $data["ijazah"];   ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
<?php include('footer.php') ?>
</body>
</html>