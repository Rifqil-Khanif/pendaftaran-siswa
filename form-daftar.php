<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>Penerimaan Siswa Baru</title>
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
<div class="container">
	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Calon Siswa</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
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


                       
                            <p>  
                            <input type="submit" class="btn btn-primary pull-right" value="Daftar" name="daftar" />
                     
                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
	    </div>
	</div>
    </body>
</html>