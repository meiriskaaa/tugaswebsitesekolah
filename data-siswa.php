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
        <h1>Data Siswa</h1>

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>NIS</th><th>Nama</th><th>No.Hp</th><th>Alamat</th><th>Jurusan</th><th>Jenis Kelamin</th><th>Alamat Email</th>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from siswa order by id_siswa ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_siswa']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['jurusan']?></td>
                <td><?php echo $row['jenis kelamin']?></td>
                <td><?php echo $row['email']?></td>
                <td>



                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>