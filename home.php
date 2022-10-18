<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penerimaan Siswa Baru</title>
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



 
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>


 
        </div>

        <div class="container">
	    <div class="row">
	    	<div class="col-md-10 col-md-offset-2">
	    		<div class="card-background">
	    		<h1 class="text-center login-title">Penerimaan Siswa Baru</h1>
				<h1 class="text-center login-title">SMK CODING</h1>
	    			<div class="col-md-6 col-lg-5 col-sm-12 student">
	    				<center>
	    					<a href="form-daftar.php">
		    					<img src="img/student.png" alt="Login">
								<h3>Daftar Baru</h3>
							</a>
	    				</center>
	    			</div>

	    			<div class="col-md-6 col-lg-5 col-sm-12 note">
	    				<center>
	    					<a href="list-siswa.php">
		    					<img src="img/note.png" alt="Pendaftaran Siswa Baru">
								<h3>Pendaftar</h3>
							</a>
	    				</center>
	    			</div>	
					<a href="logout.php" class="btn btn-primary pull-right">LOGOUT</a>
	    		</div>
	    	</div>
	    </div>
	</div>
    </body>
</html>
