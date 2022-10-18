<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Formulir Edit Siswa | SMK Coding</title>
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

<form action="proses-edit.php" method="POST">
<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
<div class="container">
	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Edit data siswa</h4>
                        <p class="category">edit data sesuai yang anda inginkan</p>
                    </div>
                    <div class="card-content">
                    <form action="proses-pendaftaran.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" required>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                            	<div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
                                        	<option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
										
                                        	<option value="laki-laki" >Laki-laki</option>
                                        	<option value="perempuan" >Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Agama</label>
                                        <select name="agama" class="form-control">
                                        	<option value="" disabled selected>-- Pilih Agama --</option>
										
                                        	<option value="Islam" >islam</option>
                                        	<option value="Kristen" >Kristen</option>
                                            <option value="Hindu" >Hindu</option>
                                        	<option value="Budha" >Budha</option>
                                            <option value="Atheis" >Atheis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>






                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Sekolah asal</label>
                                        <input type="text" class="form-control" name="sekolah_asal" placeholder="nama sekolah">
                                       
                                    </div>
                                </div>
                            </div

                            <center>
            <input type="submit" value="Simpan" name="simpan" />
        <center>

        </fieldset>


    </form>
    
    </body>
</html>