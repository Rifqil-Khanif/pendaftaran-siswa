<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penerimaan Siswa Baru</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="css/demo.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	
	

	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <h1 class="text-center login-title">Penerimaan Siswa Baru</h1>
	            <div class="account-wall">
	                <img class="profile-img" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAFwAXAMBEQACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAFBgMEBwACAf/EADwQAAIBAgQEAwUFBgYDAAAAAAECAwQRAAUSIQYTMUEiUWEHFDJCgVJxcpHRIzOCoaKxFiWSssHSFUNi/8QAGwEAAgMBAQEAAAAAAAAAAAAABAUAAwYCAQf/xAA2EQABAwIEAgkDAwQDAQAAAAABAAIDBBEFEiExE0EiMlFhcYGRofAUseFCwdEGI1JiFZLxJP/aAAwDAQACEQMRAD8A3HEUXYiijnmip4XmnkSOKNSzu7WCgdSTiKJKzfj+KmlCU6RQqbFDUiRpZFPRxDGCwU9i5S/3WOOmRvebMF1w+VkYu82QSo4+r2bSs1Syn5qbL447fWWVv9pwS2gqHfpt6IR2J0jf1+xQStzyvrpFeVBIVNw1bO8x27hU0Ih9VF/XBTMKceu5BSY2wH+226uUfF2ZUqgaswRV+WGrSoB+k66h/r+uK34ZMOqQVbHjNO7rAhGKP2hzrpFTLDcnpV0kkFh6yRmVB9bDAz6WdnWaUZHW00hs14+eKb8k4mo81aOLSYJ5VLxKXV0nUdWjkUlXHoDcbXAwOikcGIouxFF2IouxFELzvO6bKFjSRXmqZdRip47amC/ExJICqO7MQBt3IBiizfiDjWozaIQxJTMiPdEg5kkbvfws7uihlXdrKCGbTvYG5UNHLKRpYdqCqK+CFp6QJHJLixkEu7OzSMS8shJZ27lj3O+NDGxkbMrOSyk0kkz88h3RbNcrpaWjp6ugzGOqikJRwRocOOvhO9sVwzvc8skbYj5urqimjZG2SN9wfX0QSfmMCkYJKrrJHYDC3Fq8QDhN62h9xp56rRf0xg/1DhUy2LLllvFp18ri34U0P7bQAQuu27GwH34awzNlibK3Yi6zVXSvpql9O86tNkcrMijpqCkZWqZK6oDFYo4w6mzWsCpJ6EEHcH0xRHVF0jtg0c72KIlogyNtrlx7rhCWjrckq2RkmpmdleRAm6P8kyj7Sm3T4lupvfA9XTtqGcWHU/dFUNU+lk4M+g7+X4WhZHx7DV6jmEcMcSfvJ4JHIhHQGVHVWRb/ADDUo7sMJnscw2cLFaCORkjczDcJ1BuAR0OOV2vuIooK6rhoKOarqpBHBBG0kjnsoFycRRY1xLmVRmVfPHUXUuVNWnkeqU/4UBu32nY/Zthnh1KJDxH7DZJsWrTE3hM3O/cFUgpnanasMeunhkRJBqte9zb0+E74cueM2TmQs+yNxbxCLtBCOZtnGWNlhosvoRyZf2iiSRiaZ+9gf+DbzGA4KebiZ5HajTxCPqKqAxcONuh18Clu+GCVIxwxkA4iqKyCPMTSSQRLzAqa9SNfYi4t8OM/jMTHvbrY8/BbL+mK+Smje1zQ5twRfk7tCDRmNkHIYNH2I7jDqnaxsTQzawWXrZZZah8kvWJJKuUGZ1mXlvc6iSJXILhDbVbzx7LDHL1xdVw1EkPUNkwo9Dn5mEiSGtqpRyYYEDGnjRbAFmsAO5t5YALZKa1uqBrfmSmjTFV3B6zjpbkB9glioiloq3XTTxipp3IiqI/Eh7H8SHoR3F8FSxMqY7EW+4QUM0lHNcG459hWiez3PVqoI6FhoQozU6Fi3K02EkN++gkFT3Rl8jjNvYWOLXbha+ORsjA9uxTtjldpG9omeLTxCkjKvyGSWRD0klveCI/xDmN/8xm+zY7jYZHhg3K4lkbEwvdsFnuXUc1TMlNCss8rksxAu7ndmb7zucafowRW2AWM6dVNfclOWc1Y4eoxR0EjK7qvJk5YSVU62cEWYbtY7EG488LaeP6l+d4059l+7sTWpl+kjyRnXl227+3fRJErsFeQhpGALW6lj+uGxNm6BIx0nWJ3SzmnENZGTDHSmlcjrLu35dP74T1GIyt6Ibl8d1oaTCIHdNz8w7tk5+wOods14gMjlnaljcljckhn/XCkkuJJ3TwNDQGtFgFmuX5vVULsYHDRsSTG+6n9MXwVUkB6J07EPVUMNSOmNe1NuVZlLX25lFJCpW4kJurel8PaapdNuwjv5LMVlEyn2eD3c0ZoauShqBNFY7FXVujqRYg+hGCJI2yNylCQzOhdmCZs2iizPhuKvhRU5JsGJ5cUSBd40Hc6iBc7kg9sLoHOiqDG7n5k95+aBNqhjZqUSN5eQ8B811S1lFXJRZnE0TqhklVombZY6hbhCSeiupaJvSQH5cc4nT3HFHmrMGqrEwO8QtqynMYM0oI6unPhe4ZG+KNhsyMOzAggjzGEy0Cx7iYEZu12Zh7xWOLsT4veGXV9+kBfQKB0w0wsAvcUkxtxEbG8iVd4TiheaR/fhR1ayRiFrFiQSdQCj4r7Cx2sScHVpcABlu3X53JbhwaSTms7S37+KG5zWNV5hLNI4Kg6FsxKgDyuTYHc29cXwMbHGAhqmR0spO6Ts45iSzMc9EUbElYY7lgPLY4XVWYOJ41h2fCnFCGua0CnuRuT+QlhiSxJJJPc9cJd9VoQLCy0n2GS8vO86Hb/AMYzfkw/XHoXjlmUP7pPwjHi6RDK3KzFVzFqK/RhfSfvsdsEUziHW4mRB1bAW3MWf0TllQdKXTLXR1blriRSOnl1xoaa4ZZz8x7VlKyzpLsjLB2Ju4TqZBNLSpPDFIyXheps0ce41mx2uVB/LFNbGLB5Hjbfu90Rh0pBLAbHlfbv9kEzcU09TUrToPd5L2jIuACN19Re4wSxrjEGyboOR7Wz5otBfRPPAlfBT5bPJUSWapaCYMx3a9LALk99wd8ZW1lt73SNmFQKqtSZLhXpkm0t1DTM85/lKuHWFN6LnLO44/psZ5/PRRxu8bh42ZWHQqbEYakAixSNri03Co5pl0WZwpFOzqqtqGm3lbviippm1DQ15RNJWPpXFzANe1QZPwTQV+ZU9G9XVxJKxBdFDkWBPS2/TCupw+KGIvaSnVHis1RMI3Aa+P8AKNy+zjhUUL1cPE9Y6AlVY09lZ9OoLfTttgDgSZsuU3TT6qLLnzC23mruQcNwcK5rXmhrZ5mehliqOagvGhF7gbHsm5+1jnhOsHBuhXZmZctLhcalB8u9nWUSPTpV5rWU8M11hlVVfmEELYDTvuce8F+vR23Xn1EZDSHDpbd6lzP2c8P01DVzUOfVtVNTMqyRGnChbtp3Onbv+WLIqcvka14sCqp6sMie5hBLfmqAJwvRpKjiWYlGDC+nt9MNW4XC0g3KROxudzS0tGvj/KO4ZpOuxF4q+YU2dVVJlrZTKscUdM0Tgre7JNIo/pCj6Yyk4yyuHeVu6VwfAx3cFaqA61Q5qct3poGKX+ArEsbL/C8br9MN8KcDGW9hWfxthEzXciFLQhjWRBTADq61F9A9Tbf6d8E1znNp3OabFLqNuaYD77K7xFEYszkV3gd9ixSIwsdh8UZ6H1GxvgLC6h780bze3qi8SiDXX0+3t+6u8G0VWc1gzCKnd4KdzqNiNV1IsptY2vvi3EZ2CMxc1dhFLIZBN+kKz/hrNf8ADZyzkpzfe+fr1HTbl6bdOt8DfXR8fiWNrWRf/HS/TcK4vmv5IlVZXmE2b5tWLSkR1tG8Eak7qxVRc7dPCcUNqGCKNn+JuiXUj3TSSaWc2ygjyTMljyNTTj/Lpnkksx8QMit4dvIHHZq2Eymx6WyrbQyBsIuOhe68nI8y5OeJ7uL5hKrxbnwgSFzq28j2viCrZeI69HdT6GS0wuOmdEnyxSwStFPFJFIvxI6lSNr7g4exvbI0ObssxLE6J5a8aq0KZORIGBD+6pUhtu+oaQOtuhvbt3Hixj243Uvr2MFrB5ZzsdRYnvAFt7c+5aQ4ZC2kc/mQHd+211S742azCs0+dnKsuo4hQ1VRzkknDQxlwA0shUG3mLN9zDzxlKlwfM4jtW4pGFkDGnsTH7TMqjoKta2mNjJefRbZSZYo5B+FhIG9GS/zEGykldHM3Lz09VXXQsmgcHchf0SzSSNDUxuk0kBU/vYxdkHcj1tjQVTOJC5vcsjTPySg3sjfEGWViwU9QKPMEhCbc+Tm8sebH4kJ6kbjfY4R4U/JPY8wnGIwvMQIBsPP8hdkWY5vUvDluWQ0pYJsDAg2A6sSP59cHVFJTRjiPJ1XNJXVcpEUQbomN4swpl/zTPsion7q0SG356cLHOp/0tPr+E5ayqt0nD0P8qN2qdKtScRZFUKXCm0UY03PXa+IH0/Np9fwvSyp5PHp+V6LkNobivIBJ9jkRf8AbHmeD/E+v4XuSo/zH/X8qHMY+IqOjkrIZsrrKSNSzSQxoSAOptb+xOL4hSSENIIPj+EJO6ujaXNLSB3flJuZZhLXzc+oWFXC2JjiVL287dcO4KdlOCGlZ2pq5KpwL7eSnMTRjMrEhY6amiYWOzXJINth17qD9xuT88oZBLXQOH6nud5ffb/YjxGi1tY3JSPHY2yHpAKqppqZywSadI30mxKk+Kx7bXxv66QsgJbusxhsbZKlocLjVa/wbl8NPw9Ry8tDLVRJUTEqN2ZF2A7KAFUDsFGM0teqXtEy01eUioBKpCHSoZVuUhdbFx+Bgkh9EIx6CQQQvCA4EFZZG0scjJMBHVQMFkVTcK3W48wRYg9wRjUQTNnjzDzWLqYH0suU+X8o1RR0s9PGz09Tmmc1k0rlEqWUhFA+Pfe+57frnKqH6SovGD2hNKdzZYrkFz3Xvr90Lr6OrpZDFO01DM6nVHBUaXVT8pKm4HocOonx1sQD9xv4oImahkLmi1/NQ0HCFPUQc+ny+le7MP2jKXYi2o+Lc2uCTj10dJEcpb7XVjZa+Zudr/eynl9nYnm5RyqnLrIEblyBbGxO9j5D+2KXfQkXLfnkr2f8kw2D7+/3UEPBEckUBjyqJlmV2jHUkKLnv37eeLCyibcFo0VfFxF1jmOt/b5oqy5LHldVLHRSz0b6tEy01QQknmrC9mHbHQooHEPaLc1W7EapuaN5vuPhRGFI4oXrqvWKaIgDSLtI3YIO56W7EkDzwoxrFbf/AB056Z3PJo7/AN+6/OyJwvDy48eUaDYdpUlSrxUgSqWMVtQ/PnUKh5O1lQHdhZQBYnoOmF39O0/FqTUNvw2DKNTqeZ5A99hujcaqAyHg/qdqVHlNLPmGZItNfWrNDEV7zuhUfREZ5T5aVHzDD7E5wbRDzQ2DUxF5neA/dblTQpT08UEQtHEgRR6AWGFCfKQgHriKLMeOOEloFFfQ6YqWPYORtSre+l7f+i5O/WIm48BYC6Cd8Dszf/UPU0sdSzK/ySvl1fUUE8zRoYalUeCRH+KJiLH6i9wR1FiNjh89rK2GwNgst/doJiCNbffmrtMlFDluW01FTU0uaVrPFJPKSwh8YC+DcAkHrbt54Qy089G8iK/ijInROjYGgF7tNdbL7V1UuSBcshzNZJ0dudyEGhGuLqGIuTdRcdNsHQVsM8wbK0X2vyuqZs1M3hsfcju2UK55mSuzpVFGdtTaEVbm4N9h5qMNDSwnQhCfWT3uHfb5yXuHMs3mSQRVMrKFuwuAEARht5eEN0wBXVNDQ5eMNTtYXJ1H7kboulFbVE8N22/ofmi5VjqqyXUHzCqJYy8oaYUIexLOB5A9Btfcd8Zeux2pfHaP+yzS3N50vprpv3X7d08p8Lia7PL03e3oq7OFk51TKtXVLcxKgtBTne+kA+I+NvESetrDcYtosDmqAMw4cfO/Xdy1v1dhyHcVzV4tFDcRnM72CgiiqM0qjFBzWYyBHaJQXZyL8uMdNVtyT4UXxNtYHRTTR0UYp6cWt7fyfFLqOkkrH8eoNx9/wtX4R4XhySFZpUj975fLVYySkCE3KITubndnO7kXPQAKCSdStCAALBMmPF6uxFF8dQ6lWAKnYgjriKLMOIeBa2Krkny2NnplULDyCrOqdkeNtIYLdrMrg6bLpOkXIp6mSA9HmhaqjiqQM+45pTIrKGUyMjXgYM00IY8o9QXQgPH0v4lA8icNosQilGWQW+yRTYVPA7PF0revooZNFXI9SzCQzMXLqbhiTcnbHYw6kOob7pa+STOS7dVZpaiKTREihAQOZUSAKfRbbn62xC2eI2Y64/2/Y7+quZHE9uZx17ANfPl917SB5LrVySSXsSg8MZNj2HXqet+uORA2d4NQw5ht2a2vYjwG/YF19U6JpEGg91elrZp+XRAvKesdLAn9QRdh13bYeZxRFQYfh7jK1vSPM6u8NdbIjj11f0Bt6BXsm4dzTOvFBGTHvvFIBGDts0xBBPpGsg2+IHFU2JyONoxYe6Y0+DRMF5Tc+y0jhLhaPIlMkpjkn0lI9Aa0SE6mAJNyWbdm2vYbWAwtcS43O6btaGgNGyZRtjxersRRUven8lxFF3vT+S4ii73p/Jf54iio5lRUmZ6TWUyNInwSqSkifhdSCPocRRZD7Tmh4VnUwUkFY8pBMlSpRxe/zRFCfva5x02R7OqbLl0UcnXaCr3suoKTi6mqamrgSkeImMCm8V77XLS62+l7HuDiOe5/WN142NkfUACUeL84Th/P58tp8ropooRs0jTITvbdY3VfyUY9E0gFg4+q8NPC43LR6LV+EMiy+pyiCsngVkm8RpQoWG47lVA1/wAZbHBN9SuwABYJ0WoZFCqqAAWAA6Yi9X33p/JcRRd70/kuIou96fyXEUX/2Q=="
	                    alt="">
	                <form class="form-signin" method="post" action="cek_login.php">
		                <input type="text" class="form-control" name="username" placeholder="Masukkan username" required autofocus>
		                <input type="password" class="form-control" name="password" placeholder="Password" required>
		                <button class="btn btn-lg btn-primary btn-block" type="submit" value="LOGIN">
		                    Sign in</button>
		                
		               
			         </form>	           
	              </div>						
</body>
</html>