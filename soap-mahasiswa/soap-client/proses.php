<?php
error_reporting(1);
include "Client.php";

if ($_POST['aksi'] == 'tambah') {
  $data = array('nim' => $_POST['nim'], 'nama' => $_POST['nama'], 'no_hp' => $_POST['no_hp'], 'jurusan' => $_POST['jurusan']);
  $abc->tambah_data($data);
  header('location:index.php?page=daftar-data');
} else if ($_POST['aksi'] == 'ubah') {
  $data = array('nim' => $_POST['nim'], 'nama' => $_POST['nama'], 'no_hp' => $_POST['no_hp'], 'jurusan' => $_POST['jurusan']);
  $abc->ubah_data($data);
  header('location:index.php?page=daftar-data');
} else if ($_GET['aksi'] == 'hapus') {
  $abc->hapus_data($_GET['nim']);
  header('location:index.php?page=daftar-data');
}
