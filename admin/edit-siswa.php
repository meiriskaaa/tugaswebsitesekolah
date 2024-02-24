<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-siswa.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from siswa where id_siswa='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_siswa">NIS</label>
                        <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']?>" class="form-control">
                        <input type="number" name="id_siswa" value="<?php echo $row['id_siswa']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">NO.HP</label>
                        <input type="text" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                     <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" value="<?php echo $row['jurusan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>