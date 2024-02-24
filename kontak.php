<?php include "header.php"; ?>
<div class="container">
    <div class="row">
      <div class="col-md-8">  
         <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>
        <form action="proses_kritik.php" method="post">
          <div class="form-group">
            <h3>Silakan beri Kritik dan Saran Anda</h3>
            <label for="tentang">Subjek:</label>
            <input type="text" class="form-control" name="tentang" placeholder="Isikan subjek">
          </div>
          <div class="form-group">
            <label for="artikel">Isi Kritik/Saran </label>
            <textarea name="isi" id="isi"></textarea>
            <script>
            CKEDITOR.replace( 'isi' );
            </script>
          </div>
          <button type="submit" class="btn btn-info">Simpan</button>
          <button type="reset" class="btn btn-danger">Batal</button>
        </form>
    </div>
  </div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include "footer.php";?>
</body>
</html>