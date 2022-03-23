<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Data Mahasiswa</title>
<body style="background-image:url(https://images.unsplash.com/photo-1635430428280-8893d85549c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1475&q=80)">

<?php
include ("koneksi.php");

$data=$_GET['nim'];
$edit="SELECT*FROM mahasiswa WHERE nim='$data'";
$proses=mysqli_query($conn,$edit);
$row=mysqli_fetch_array($proses);
$checked = explode(',', $row['pend']);


?>

<h1><center></center></h1></br>

<div class="container">
<div class="card">
<div class="card-body"> 
<h1><center>UBAH DATA</center></h1></br>   
    <form method="POST" action="ubah.php">
    <form>
      <div class="mb-3">
         <label class="form-label">NIM</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="txtnim" value="<?php echo $row[0] ?>" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Nama Mahasiswa</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="txtnama" value="<?php echo $row[1] ?>" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Jenis Kelamin</label>
         <div class="form-check">
            <input class="form-check-input" <?= $row[2] == 'Laki-Laki'? 'checked' : '' ?> type="radio" name="txtjenis" id="flexRadioDefault1" value="Laki-Laki" >
            <label class="form-check-label" for="flexRadioDefault1">Laki-Laki</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" <?= $row[2] == 'Perempuan'? 'checked' : '' ?> type="radio" name="txtjenis" id="flexRadioDefault2" value="Perempuan">
            <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
         </div>        
      </div>
      <div class="mb-3">
         <label class="form-label">Alamat</label>
         <textarea class="form-control" id="exampleInputEmail1" name="txtalamat" required> <?php echo $row[3] ?> </textarea>
      </div>
      <div class="mb-3">
         <label class="form-label">Tempat Lahir</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="txttempatlahir" value="<?php echo $row[4] ?>" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Tanggal Lahir</label>
         <input type="date" class="form-control" id="exampleInputEmail1" name="datetanggallahirr" value="<?php echo $row[5] ?>" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Histori Jenjang Pendidikan</label>

         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="SD">
            <label class="form-check-label">SD</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="MI">
            <label class="form-check-label" for="flexCheckDefault">MI</label>
         </div>        
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="SMP">
            <label class="form-check-label" for="flexCheckChecked">SMP</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="MTS">
            <label class="form-check-label" for="flexCheckDefault">MTS</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="SMA">
            <label class="form-check-label" for="flexCheckChecked">SMA</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="SMK">
            <label class="form-check-label" for="flexCheckChecked">SMK</label>
         </div>
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="txtpend[]" value="MA">
            <label class="form-check-label" for="flexCheckDefault">MA</label>
         </div>
      </div>
      <div class="mb-3">
         <label class="form-label">Jurusan</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="txtjurusan" value="<?php echo $row[7] ?>" required >
      </div>
      <div class="mb-3">
         <label class="form-label">Fakultas</label>
         <select name = "txtfakultas" class="form-control" value="<?php echo $row[8] ?>" required>
            <option <?= $row[8]=='Fakultas Psikologi'? 'selected':''?> >Fakultas Psikologi</option>
            <option <?= $row[8]=='Fakultas Teknik'? 'selected':''?> >Fakultas Teknik</option>
            <option <?= $row[8]=='Fakultas Teknologi Informasi'? 'selected':''?> >Fakultas Teknologi Informasi</option>
            <option <?= $row[8]=='Fakultas Ilmu Sosial dan Politik'? 'selected':''?> >Fakultas Ilmu Sosial dan Politik</option>
            <option <?= $row[8]=='Fakultas Ekonomi Bisnis'? 'selected':''?> >Fakultas Ekonomi Bisnis</option>
         </select>
      </div> 
      <center>
      <button type="submit" class="btn btn-primary" value="ubah" name="" >Ubah Data</button>
      </center>
    </form>
</div>
</div>
</body>
</html>