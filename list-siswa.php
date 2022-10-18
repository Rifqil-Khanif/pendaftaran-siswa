<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>BukuTamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
     
    </style>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
    
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top" data-aos="fade-down">
    <div class="container">
        
      <a class="navbar-brand">LIST SISWA YANG SUDAH MENDAFTAR </a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          </nav>

      <!-- Akhir -->
      <!-- Table -->
      <div class="container pt-5 pb-5">
            <div class="container-fluid">
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead class="table-dark">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Sekolah asal</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
       $sql = "SELECT * FROM calon_siswa";
       $query = mysqli_query($db, $sql);

       while($siswa = mysqli_fetch_array($query)){
           echo "<tr>";

           echo "<td>".$siswa['id']."</td>";
           echo "<td>".$siswa['nama']."</td>";
           echo "<td>".$siswa['alamat']."</td>";
           echo "<td>".$siswa['jenis_kelamin']."</td>";
           echo "<td>".$siswa['agama']."</td>";
           echo "<td>".$siswa['sekolah_asal']."</td>";

           echo "<td>";
           echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
           echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
           echo "</td>";

           echo "</tr>";
       }
        ?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<a href="logout.php" class="btn btn-primary pull-right">LOGOUT</a>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>