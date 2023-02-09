<?php
error_reporting(1);
include "Client.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <a href="?page=home">Home</a> | <a href="?page=tambah">Tambah Data</a> | <a href="?page=daftar-data">Data Server</a>
  <br /><br />

  <fieldset>
    <? if ($_GET['page'] == 'tambah') { ?>
      <legend>Tambah Data</legend>
      <form name="form" method="POST" action="proses.php">
        <input type="hidden" name="aksi" value="tambah" />
        <label>NIM</label>
        <input type="number" name="nim" />
        <br />
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" />
        <br />
        <label>No HP</label>
        <input type="number" name="no_hp" />
        <br />
        <label>Jurusan</label>
        <input type="text" name="jurusan" />
        <br />
        <button type="submit" name="simpan">Simpan</button>
      </form>

    <? } elseif ($_GET['page'] == 'ubah') {
      $r = $abc->tampil_data($_GET['nim']);
    ?>
      <legend>Ubah Data</legend>
      <form name="form" method="post" action="proses.php">
        <input type="hidden" name="aksi" value="ubah" />
        <input type="hidden" name="nim" value="<?= $r['nim'] ?>" />
        <label>NIM</label>
        <input type="number" value="<?= $r['nim'] ?>" disabled>
        <br />
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" value="<?= $r['nama'] ?>">
        <br />
        <label>No HP</label>
        <input type="number" name="no_hp" value="<?= $r['no_hp'] ?>">
        <br />
        <label>Jurusan</label>
        <input type="text" name="jurusan" value="<?= $r['jurusan'] ?>">
        <br />
        <button type="submit" name="ubah">Ubah</button>
      </form>

    <? unset($r);
    } else if ($_GET['page'] == 'daftar-data') {
    ?>
      <legend>Daftar Data Server</legend>
      <table border="1">
        <tr>
          <th Width='5%'>No</th>
          <th Width='10%'>NIM</th>
          <th Width='30%'>Nama Mahasiswa</th>
          <th Width='20%'>No HP</th>
          <th Width='25%'>Jurusan</th>
          <th Width='10%' colspan="2">Aksi</th>
        </tr>
        <? $no = 1;
        $data_array = $abc->tampil_semua_data();
        foreach ($data_array as $r) {
        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $r['nim'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td><?= $r['no_hp'] ?></td>
            <td><?= $r['jurusan'] ?></td>
            <td><a href="?page=ubah&nim=<?= $r['nim'] ?>">Ubah</a></td>
            <td><a href="proses.php?aksi=hapus&nim=<?= $r['nim'] ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Hapus</a></td>
          </tr>
        <? $no++;
        }
        unset($data_array, $r, $no);
        ?>
      </table>

    <? } else { ?>
      <legend>Home</legend>
      Aplikasi Sederhana Menggunakan Web Service SOAP (Simple Object Acces Protocol) dengan format data XML (Extensible Markup Language).
      Database Mahasiswa.
  </fieldset>
<? } ?>
</body>

</html>
