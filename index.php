<!DOCTYPE html>
<html lang="en">
<?php
    include('head.php');
    include('navbar.php');
?>
<body>
    <!-- INI CAROUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/cr1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/cr2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/cr3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- INI CONTENT -->
    <div class="row" style="margin-top: 2%; margin-bottom: 4%;">
        <!-- INI CONTENT 1 -->
        <div class="col" style="background-color: #f7f7f7;">
            <div class="text-center"><h2>TENTANG KAMI</h2></div>
            <div class="container">
                <div class="row gx-0" style="margin-top: 6%;">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="content" style="margin-top:6%">
                        <h3>Golek Gawe</h3>
                        <p>Golek Gawe adalah sebuah startup yang berfokus mewadahi para job seeker dalam mencari informasi open recruitment perusahaan. Selain itu,
                            Golek Gawe juga menyediakan fitur yang membantu job seeker dalam...
                        </p>
                        <div class="text-left text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span></span></a><a href="#">Baca lebih lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/images/ct1.JPG" class="img-fluid" alt="" style="width: 83.5%;border-radius: 8px;margin-left: 10%;">
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- INI CONTENT 2 -->
        <div class="col" style="background-color: white;">
            <div class="text-center" style="margin-top: 2%;"><h2>EVENT GOLEK GAWE</h2></div>
            <div class="container">
                <div class="row gx-0" style="margin-top: 6%;">
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/images/ct2.png" class="img-fluid" alt="" style="width: 83.5%;border-radius: 2px;margin-left: 10%; margin-bottom: 10%;">
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/images/ct3.png" class="img-fluid" alt="" style="width: 83.5%;border-radius: 2px;margin-left: 10%; margin-bottom: 10%;">
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%;">
        <!-- INI CONTENT 3 -->
        <div class="col" style="background-color: #f7f7f7;">
        <div class="container">
            <div class="jumbotron" style="background-color: #f7f7f7;">
                <h1 class="display-4">Halo, Wong GG!</h1>
                <p class="lead">Sudah nganggur cukup lama? Kirim CV sana-sini belum dapat panggilan? Ayo daftarkan dirimu sekarang!</p>
                <hr class="my-4">
                <p>Bergabunglah dengan Golek Gawe, niscaya masa depan mu akan cerah. Klik tombol dibawah ini!</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" style="margin-top: 12px;" href="create.php" role="button">Daftar Sekarang</a>
                </p>
            </div>
        </div>
        </div>
    </div>
    
    <!-- INI FOOTER -->
    <div class="footer" style="background-color: #192027; color: #999999; font-size: 14px;">
    <div class="container">
    <div class="row">
        <div class="col-md-12 p-2">
        <div class="text-center">
            <a>&copy; 2021 GOLEK GAWE All rights reserved.</a>
        </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>