# aplikasi-pendaftaran-siswa-baru

@aminsholeh

[`Cek webnya disini`](https://pendaftaran-siswa.up.railway.app/)<br>

# Info Login
## Login Ke Webnya menggunakan Username dan Password dibawah

```
> USERNAME : admin
> PASSWORD : 123
```


## Edit Config Untuk Menyambungkan Server Database

<details>
    <summary> <b>Edit Config.php</b></summary><br/>

```ts
<?php

$server = "containers-us-west-56.railway.app";
$user = "root";
$password = "e1nj5D50lj6wpRDRpNwF";
$nama_database = "railway";
$port = '7020';

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
```

