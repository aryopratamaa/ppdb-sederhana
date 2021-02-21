<?php

include "koneksi.php";

$sql = "SELECT * FROM tb_formulir";

$stmt = $koneksi->prepare($sql);
$stmt->execute();

?>

<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>DATA PESERTA DIDIK BARU TAHUN 2021</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Data Peserta</li>
          </ol>
        </div>
      </div>
</section>

<section class="inner-page pt-4">
    <div class="container">

        <table class="table table-striped table-responsive">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Hanphone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $stmt->fetch()) { ?>
                <tr>
                    <td><?php echo $row['jenis_pendaftaran']; ?></td>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['nik']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['hp']; ?></td>
                    <td>
                        <a href="details.php?id=<?php echo $row['id_pendaftaran']; ?>">Detail</a> |
                        <a href="edit.php?id=<?php echo $row['id_pendaftaran']; ?>">Edit</a> |
                        <a href="proses.php?del=<?php echo $row['id_pendaftaran']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</section>