<?php
include ("koneksi.php");

$nim		 = $_POST['txtnim'];
$nama		 = $_POST['txtnama'];
$jenis		 = $_POST['txtjenis'];
$alamat		 = $_POST['txtalamat'];
$tempatlahir = $_POST['txttempatlahir'];
$tanggallahir= $_POST['datetanggallahirr'];
$pend		 = implode(', ', $_POST['txtpend']);
$jurusan	 = $_POST['txtjurusan'];
$fakultas	 = $_POST['txtfakultas'];

    $query="update mahasiswa set nama='$nama', jenis='$jenis', alamat='$alamat', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', 
    pend='$pend', jurusan='$jurusan', fakultas ='$fakultas' where nim='$nim'";
    $hasil=mysqli_query($conn,$query)or die(mysqli_error($conn));

header("location:index.php");
?>