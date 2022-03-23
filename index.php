<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<title>Data Mahasiswa</title>
<body style="background-image:url(https://images.unsplash.com/photo-1635430428563-184bc6506df4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1475&q=80)">
      
        <h1><center></center></h1></br>
        <div class="container">
        <div class="card">
        <div class="card-body">        
              <h1><center>DATA MAHASISWA</center></h1>
              <div>
              <center>
              <a class="btn btn-success" href="tambah.php">Tambah Data</a>
              <a class="btn btn-danger" href="logout.php">Log Out</a>
              </center>
              </div>
              <table class="table">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">JENIS</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">TEMPAT LAHIR</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">HISTORI JENJANG PENDIDIKAN</th>
            <th scope="col">JURUSAN</th>
            <th scope="col">FAKULTAS</th>
          </tr>
        </thead>
        <tbody>
        <?php include("koneksi.php");
          if($conn){
          $hasil=mysqli_query($conn,"SELECT*FROM mahasiswa");
          while ($row = mysqli_fetch_array($hasil))
          {
              echo    " <tr><td>$row[nim]</td>
                      <td >$row[nama]</td>
                      <td >$row[jenis]</td>
                      <td >$row[alamat]</td>
                      <td >$row[tempatlahir]</td>
                      <td >$row[tanggallahir]</td>
                      <td >$row[pend]</td>
                      <td >$row[jurusan]</td>
                      <td >$row[fakultas]</td>
                      <td > <a class='btn btn-primary' href='form_ubah.php?nim=$row[nim]'><i class='bi bi-pencil-square'></i></a></td>
                      <td ><a class='btn btn-danger' href='hapus.php?nim=$row[nim]'><i class='bi bi-trash'></i></a></td>
                      </tr>";
              $row=mysqli_query($conn,"select*from mahasiswa where nim='$row[nim]'");

          }
          }
          ?>
      </div>
      </div>
  </tbody>
</html>