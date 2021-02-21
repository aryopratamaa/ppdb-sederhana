<?php

include "koneksi.php";

if (isset($_POST['btn_simpan'])) {
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nik = $_POST['nik'];
    $nomor_kk = $_POST['nomor_kk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $date = $_POST['date'];
    $agama = $_POST['agama'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $hp = $_POST['hp'];
    $photo = $_POST['photo'];
    $ayah = $_POST['ayah'];
    $tahunlahir_ayah = $_POST['tahunlahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $ibu = $_POST['ibu'];
    $tahunlahir_ibu = $_POST['tahunlahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $wali = $_POST['wali'];
    $tahunlahir_wali = $_POST['tahunlahir_wali'];
    $pendidikan_wali = $_POST['pendidikan_wali'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $pernyataan = $_POST['pernyataan'];

    $sql = "INSERT INTO tb_formulir VALUES (NULL,
    :jenis_pendaftaran,
    :asal_sekolah,
    :nama_lengkap,
    :jenis_kelamin,
    :nik,
    :nomor_kk,
    :tempat_lahir,
    :date,
    :agama,
    :alamat_jalan,
    :hp,
    :photo,
    :ayah,
    :tahunlahir_ayah,
    :pendidikan_ayah,
    :pekerjaan_ayah,
    :ibu,
    :tahunlahir_ibu,
    :pendidikan_ibu,
    :pekerjaan_ibu,
    :wali,
    :tahunlahir_wali,
    :pendidikan_wali,
    :pekerjaan_wali,
    :pernyataan)";

    $stmt = $koneksi->prepare($sql);

    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(":jenis_pendaftaran", $jenis_pendaftaran);
    $stmt->bindParam(":asal_sekolah", $asal_sekolah);
    $stmt->bindParam(":nama_lengkap", $nama_lengkap);
    $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
    $stmt->bindParam(":nik", $nik);
    $stmt->bindParam(":nomor_kk", $nomor_kk);
    $stmt->bindParam(":tempat_lahir", $tempat_lahir);
    $stmt->bindParam(":date", $date);
    $stmt->bindParam(":agama", $agama);
    $stmt->bindParam(":alamat_jalan", $alamat_jalan);
    $stmt->bindParam(":hp", $hp);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":ayah", $ayah);
    $stmt->bindParam(":tahunlahir_ayah", $tahunlahir_ayah);
    $stmt->bindParam(":pendidikan_ayah", $pendidikan_ayah);
    $stmt->bindParam(":pekerjaan_ayah", $pekerjaan_ayah);
    $stmt->bindParam(":ibu", $ibu);
    $stmt->bindParam(":tahunlahir_ibu", $tahunlahir_ibu);
    $stmt->bindParam(":pendidikan_ibu", $pendidikan_ibu);
    $stmt->bindParam(":pekerjaan_ibu", $pekerjaan_ibu);
    $stmt->bindParam(":wali", $wali);
    $stmt->bindParam(":tahunlahir_wali", $tahunlahir_wali);
    $stmt->bindParam(":pendidikan_wali", $pendidikan_wali);
    $stmt->bindParam(":pekerjaan_wali", $pekerjaan_wali);
    $stmt->bindParam(":pernyataan", $pernyataan);

    $stmt->execute();

    // header("location:index.php?page=info");

}

?>