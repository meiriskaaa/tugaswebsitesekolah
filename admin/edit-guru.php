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
                <form action="proses-edit-guru.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from guru where id_guru='$id'");
                $row=$tampil->fetch_assoc();
                ?>
    
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">NO.HP</label>
                        <input type="text" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <input type="text" name="mapel" value="<?php echo $row['mapel']?>" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>