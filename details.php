<?php
include "koneksi.php";

$id = $_GET['id'];   
$sql = "SELECT * FROM tb_formulir WHERE id_pendaftaran = :id_pendaftaran";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_pendaftaran", $id);
$stmt->execute();
$row = $stmt->fetch();

?>

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

    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>DATA FORMULIR PESERTA DIDIK BARU TAHUN 2021</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=register">Pendaftaran</a></li>
            <li>Data Peserta</li>
          </ol>
        </div>
      </div>
</section>

<section class="inner-page pt-4">
      <div class="container">
        <form action="proses.php" method="POST">
            <input type="hidden" name="id_pendaftaran" value="<?php echo $id; ?>";
            <p>
                <h3>Registrasi Peserta Didik</h3>
              </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pendaftaran <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="asal_sekolah" value=<?php echo $row['jenis_pendaftaran']; ?>">    
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $row['asal_sekolah']; ?>">
                </div>
            </div>

            <p>
                <h3>Data Pribadi</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Lengkap <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Kelamin <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $row['jenis_kelamin']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Induk Kependudukan <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nik" value="<?php echo $row['nik']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Kartu Keluarga <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomor_kk" value="<?php echo $row['nomor_kk']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tempat Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tanggal Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['date']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Agama <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['agama']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat Jalan <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="textarea" name="alamat_jalan" class="form-control"  value="<?php echo $row['alamat_jalan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Handphone <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="hp" value="<?php echo $row['hp']; ?>">
                </div>

            <p>
                <h3>Data Ayah Kandung</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Ayah Kandung <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ayah" value="<?php echo $row['ayah']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input name="tahunlahir_ayah" type="text" class="form-control" value="<?php echo $row['tahunlahir_ayah']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <input name="pendidikan_ayah" type="text" class="form-control" value="<?php echo $row['pendidikan_ayah']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <input name="pekerjaan_ayah" type="text" class="form-control" value="<?php echo $row['pekerjaan_ayah']; ?>">
                </div>
            </div>

            <p>
                <h3>Data Ibu Kandung</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Ibu Kandung <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ibu" value="<?php echo $row['ibu']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tahunlahir_ibu" value="<?php echo $row['tahunlahir_ibu']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <input name="pendidikan_ibu" type="text" class="form-control" value="<?php echo $row['pendidikan_ibu']; ?>">  
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <input name="pekerjaan_ibu" type="text" class="form-control" value="<?php echo $row['pekerjaan_ibu']; ?>">
                </div>
            </div>

            <p>
                <h3>Data Wali</h3>
            </p>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Nama Wali</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="wali" value="<?php echo $row['wali']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun Lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tahunlahir_wali" value="<?php echo $row['tahunlahir_wali']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <input name="pendidikan_wali" type="text" class="form-control" value="<?php echo $row['pendidikan_wali']; ?>"> 
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <input name="pekerjaan_wali" type="text" class="form-control" value="<?php echo $row['pekerjaan_wali']; ?>">
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="index.php?page=view-data" type="button" class="btn btn-success">Kembali</a>
            </div>

        </form>
        <p></p>
        

      </div>
</section>

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




