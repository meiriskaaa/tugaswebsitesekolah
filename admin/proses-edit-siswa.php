<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_siswa'];
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$email=$_POST['email'];

$ubah=$koneksi->query("update siswa set nama='$nama', no_hp='$no_hp', alamat='$alamat', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', email='$email' where id_siswa='$id'");

if($ubah==true){

    header("location:data-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>