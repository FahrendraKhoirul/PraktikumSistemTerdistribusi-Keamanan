<?php
error_reporting(1);
include "RPCClient.php";
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
        <label>ID Barang</label>
        <input type="text" name="id_barang" />
        <br />
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" />
        <br />
        <label>Stok Barang</label>
        <input type="text" name="stok_barang" />
        <br />
        <label>Harga Satuan</label>
        <input type="text" name="harga_satuan" />
        <br />
        <button type="submit" name="simpan">Simpan</button>
      </form>

      <? } elseif ($_GET['page'] == 'ubah') {
      $r = $abc->tampil_data($_GET['id_barang']);
    ?>
      <legend>Ubah Data</legend>
      <form name="form" method="post" action="proses.php">
        <input type="hidden" name="aksi" value="ubah" />
        <input type="hidden" name="id_barang" value="<?= $r['id_barang'] ?>" />
        <label>ID Barang</label>
        <input type="text" value="<?= $r['id_barang'] ?>" disabled>
        <br />
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= $r['nama_barang'] ?>" />
        <br />
        <label>Stok Barang</label>
        <input type="text" name="stok_barang" value="<?= $r['stok_barang'] ?>" />
        <br />
        <label>Harga Satuan</label>
        <input type="text" name="harga_satuan" value="<?= $r['harga_satuan'] ?>" />
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
          <th Width='10%'>ID Barang</th>
          <th Width='30%'>Nama</th>
          <th Width='15%'>Stok Barang</th>
          <th Width='30%'>Harga Satuan</th>
          <th Width='5%' colspan="2">Aksi</th>
        </tr>
        <? $no = 1;
        $data_array = $abc->tampil_semua_data();
        foreach ($data_array as $r) {
        ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $r['id_barang'] ?></td>
          <td><?= $r['nama_barang'] ?></td>
          <td><?= $r['stok_barang'] ?></td>
          <td><?= $r['harga_satuan'] ?></td>
          <td><a href="?page=ubah&id_barang=<?= $r['id_barang'] ?>">Ubah</a></td>
          <td><a href="proses.php?aksi=hapus&id_barang=<?= $r['id_barang'] ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Hapus</a></td>
        </tr>
        <? $no++;
        }
        unset($data_array, $r, $no);
        ?>
      </table>

      <? } else { ?>
      <legend>Home</legend>
      Aplikasi Sederhana Menggunakan RPC (Remote Procedure Call) dengan format data XML (Extensible Markup Language).
    </fieldset>
    <? } ?>
  </body>

</html>
