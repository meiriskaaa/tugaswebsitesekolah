<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$mapel=$_POST['mapel'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into guru(nama,no_hp,mapel,alamat,email) 
                        values ('$nama', '$no_hp', '$mapel', '$alamat', '$email')");

if($simpan==true){

    header("location:data-guru.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>