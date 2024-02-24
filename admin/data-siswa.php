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
                    <a href="input-siswa.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from siswa order by id_siswa ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_siswa']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['jurusan']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['email']?></td>
                <td>

                <a href="edit-siswa.php?id=<?php echo $row['id_siswa']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-siswa.php?id=<?php echo $row['id_siswa']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

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