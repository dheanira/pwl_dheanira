<?php
include("koneksi.php");

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$alamat=$_POST['alamat'];
$tempatlahir=$_POST['tempatlahir'];
$tanggallahir=$_POST['tanggallahir'];
$pend=implode(', ', $_POST['pend']);
$jurusan=$_POST['jurusan'];
$fakultas=$_POST['fakultas'];

mysqli_query($conn,"insert into mahasiswa values
('$nim','$nama','$jenis','$alamat','$tempatlahir','$tanggallahir','$pend','$jurusan','$fakultas')");

header("location:form_tambah.php");
?>