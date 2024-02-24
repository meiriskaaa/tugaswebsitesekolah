<?php include "header.php"; ?>	
	<center><h2>Login Siswa</h2></center>
	<div class="container">
	 <div class="row">
	  <div class="col-md-12">
	  	<form action="?" method="post">
	  	 <div class="form-group">
	  	 <label for="nim">User Name</label>
	  	 <input type="text" class="form-control" name="User Name"placeholder="Isikan User Name">
		 </div>
		 <div class="form-group">
		 <label for="nama">No. Peserta</label>
		 <input type="text" class="form-control" name="No.Peserta"placeholder="Isikan No.Peserta">
		 </div>
		 <button type="submit"class="btn btn-info"> <a href="simpan.php"> Periksa </a></button>
		 <button type="reset" class="btn btn-danger"><a href="index.php"> Batal </a></button>
		</form>
	    </div>
	   </div>
	 </div>
	 <br><br><br>
<?php include "footer.php";?> 	