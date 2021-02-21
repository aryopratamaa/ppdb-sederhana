<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 AIR PUTIH</title>
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/touch-icon.png" rel="touch-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet"/>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"/>
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <div id="logo">
          <h1>
            <a href="index.php"><span>SMKN1</span> AP</a>
          </h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="index.php?page=prestasi">Prestasi</a></li>
            <li><a class="nav-link" href="index.php?page=about">Tentang</a></li>
            <li><a class="nav-link" href="index.php?page=jurusan">Jurusan</a></li>
            <li><a class="nav-link" href="index.php?page=galeri">Galeri</a></li>
            <li><a class="nav-link" href="index.php?page=guru">Guru</a></li>
            <li><a class="nav-link btn-daftar" href="index.php?page=register">Daftar</a></li> 
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>
    <p></p>

    <main id="main">

        <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "hero.php";
            }
        ?>

    </main>

    <footer class="footer">
        <div class="copyrights">
          <div class="container">
            <p>&copy; Copyrights 2021. All rights reserved.</p>
            <div class="credits">
              Designed by <a href="https://github.com/aryopratamaa">Aryo Pratama</a>
            </div>
          </div>
        </div>
    
    </footer>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>