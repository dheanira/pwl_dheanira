<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Data Mahasiswa</title>
<body style="background-image:url(https://images.unsplash.com/photo-1635430428280-8893d85549c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1475&q=80)">

    <h1><center></center></h1></br>
    <div class="container">
    <div class="card">
   <div class="card-body">    
      <h1><center>TAMBAHKAN DATA</center></h1></br>
         <form method="POST" action="tambah.php">
         <form>
            <div class="mb-3">
               <label class="form-label">NIM</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="nim" required >
            </div>
            <div class="mb-3">
               <label class="form-label">Nama Mahasiswa</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="nama" required >
            </div>
            <div class="mb-3">
               <label class="form-label">Jenis Kelamin</label>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Laki-Laki" >
                  <label class="form-check-label" for="flexRadioDefault1">Laki-Laki</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="Perempuan">
                  <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label">Alamat</label>
               <textarea class="form-control" class="form-label" id="exampleInputEmail1" name="alamat" required ></textarea>
            </div>
            <div class="mb-3">
               <label class="form-label">Tempat Lahir</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="tempatlahir" required >
            </div>
            <div class="mb-3">
               <label class="form-label">Tanggal Lahir</label>
               <input type="date" class="form-control" id="exampleInputEmail1" name="tanggallahir" required >
            </div>
            <div class="mb-3">
               <label class="form-label">Histori Jenjang Pendidikan</label>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="SD" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">SD</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="MI" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">MI</label>
               </div>        
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="SMP" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">SMP</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="MTS" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">MTS</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="SMA" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">SMA</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="SMK" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">SMK</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="pend[]" value="MA" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">MA</label>
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label">Jurusan</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan" required >
            </div>
            <div class="mb-3">
               <label class="form-label">Fakultas</label>
               <select name = "fakultas" class="form-control" required>
                  <option>Fakultas Psikologi</option>
                  <option>Fakultas Teknik</option>
                  <option>Fakultas Teknologi Informasi</option>
                  <option>Fakultas Ilmu Sosial dan Politik</option>
                  <option>Fakultas Ekonomi Bisnis</option>
               </select>
            </div>
            <center>     
            <button type="submit" class="btn btn-primary" value="Simpan Data" name="" >Simpan Data</button>
            <a class="btn btn-success" href="index.php">Lihat Data Mahasiswa</a>
            <a class="btn btn-danger" href="logout.php">Log Out</a>
            </center>
         </form>
      </div>
      </div>
</body>
</html>