<?php

$tentang=$_POST['tentang'];
$isi=$_POST['isi'];

include "koneksi.php";

$simpan=$koneksi->query("INSERT INTO kritik(`tentang`, `isi`) VALUES ('$tentang','$isi')");

if($simpan==true){

    header("location:kontak.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>