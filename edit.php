<?php
include "koneksi.php";

$id = $_GET['id'];   
$sql = "SELECT * FROM tb_register WHERE id = :id";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$row = $stmt->fetch();

?>

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

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>UPDATE FORMULIR PENERIMAAN PESERTA DIDIK BARU TAHUN 2021</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=register">Pendaftaran</a></li>
            <li>Edit Data</li>
          </ol>
        </div>
      </div>
</section>

<section class="inner-page pt-4">
      <div class="container">
        <form action="proses.php" method="POST">
            <input type="hidden" name="id_pendaftaran" value="<?php echo $id; ?>">
            <p>
                <h3>Registrasi Peserta Didik</h3>
              </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pendaftaran <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <select name="jenis_pendaftaran" class="form-select" id="">
                        <option selected>Pilih...</option>
                        <option>Siswa Baru</option>
                        <option>Pindahan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Asal Sekolah</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="asal_sekolah">
                </div>
            </div>

            <p>
                <h3>Data Pribadi</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Lengkap <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_lengkap">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Kelamin <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select" type="text" name="jenis_kelamin">
                        <option selected>Pilih...</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Induk Kependudukan <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nik">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Kartu Keluarga <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomor_kk">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tempat Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tanggal Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                        <input class="form-control" name="date" type="date"/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Agama <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <select name="agama" type="text" class="form-select">
                        <option selected>Pilih...</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Kong Hu Chu</option>
                        <option>Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat Jalan <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <textarea name="alamat_jalan" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Handphone <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="hp">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Photo Diri <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input class="form-control" type="file" name="photo">
                </div>
            </div>

            <p>
                <h3>Data Ayah Kandung</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Ayah Kandung <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ayah">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input name="tahunlahir_ayah" type="text" class="form-control" placeholder="Tahun Lahir Ayah. Contoh : 2000 ">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <select name="pendidikan_ayah" class="form-select">
                        <option selected>Pilih...</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>Tidak sekolah</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <select name="pekerjaan_ayah" class="form-select">
                        <option selected>Pilih...</option>
                        <option>Buruh</option>
                        <option>Karyawan Swasta</option>
                        <option>Nelayan</option>
                        <option>Pedagang Besar</option>
                        <option>Pedagang Kecil</option>
                        <option>Pensiunan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Tidak Bekerja</option>
                    </select>
                </div>
            </div>

            <p>
                <h3>Data Ibu Kandung</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Ibu Kandung <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="ibu">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun Lahir <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tahunlahir_ibu" placeholder="Tahun Lahir Ibu. Contoh : 2000 ">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <select name="pendidikan_ibu" class="form-select">
                        <option selected>Pilih...</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>Tidak sekolah</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <select name="pekerjaan_ibu" class="form-select">
                        <option selected>Pilih...</option>
                        <option>Buruh</option>
                        <option>Karyawan Swasta</option>
                        <option>Nelayan</option>
                        <option>Pedagang Besar</option>
                        <option>Pedagang Kecil</option>
                        <option>Pensiunan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Tidak Bekerja</option>
                    </select>
                </div>
            </div>

            <p>
                <h3>Data Wali</h3>
            </p>
            <div class="row mb-3">
                <label  class="col-sm-3 col-form-label">Nama Wali</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="wali">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tahun Lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tahunlahir_wali" placeholder="Tahun Lahir Wali. Contoh : 2000 ">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <select name="pendidikan_wali" class="form-select">
                        <option selected>Pilih...</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>Tidak sekolah</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <select name="pekerjaan_wali" class="form-select">
                        <option selected>Pilih...</option>
                        <option>Buruh</option>
                        <option>Karyawan Swasta</option>
                        <option>Nelayan</option>
                        <option>Pedagang Besar</option>
                        <option>Pedagang Kecil</option>
                        <option>Pensiunan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Tidak Bekerja</option>
                    </select>
                </div>
            </div>

            <p>
                <h3>Pernyataan dan Keamanan</h3>
            </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pernyataan <span class="asteriskField">*</span></label>
                <div class="col-sm-9 form-check">
                    <input class="form-check-input" type="checkbox" value="" name="pernyataan">
                    <label class="form-check-label" for="flexCheckDefault">
                      Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi berupa Pembatalan sebagai Calon Peserta Didik Sekolah SMK Negeri 1 Air Putih.
                    </label>
                  </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary" name="btn_update" value="update"></input>
                <button type="reset" class="btn btn-secondary">Reset</button>
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

</body>
</html>



