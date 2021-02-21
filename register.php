<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>FORMULIR PENERIMAAN PESERTA DIDIK BARU TAHUN 2021</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Pendaftaran</li>
          </ol>
        </div>

      </div>
</section>

<section class="inner-page pt-4">
      <div class="container">
        <form action="proses.php" method="POST">
            <p>
                <h3>Registrasi Peserta Didik</h3>
              </p>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Pendaftaran <span class="asteriskField">*</span></label>
                <div class="col-sm-9">
                    <select name="jenis_pendaftaran" class="form-select">
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
                <div class="col-sm-9 bootstrap-iso">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control" name="date" placeholder="MM/DD/YYYY" type="text"/>
                    </div>
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
                <label class="col-sm-3 col-form-label">Pendidikan</label>
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
                <label class="col-sm-3 col-form-label">Pendidikan</label>
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
                <label class="col-sm-3 col-form-label">Pendidikan</label>
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

            <div class="col-auto">
                <input type="submit" class="btn btn-primary" name="btn_simpan" value="simpan"></input>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>

        </form>
        <p></p>
        

      </div>
</section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    
    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); 
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>