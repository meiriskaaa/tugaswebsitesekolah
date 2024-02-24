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
        <h1>Data Guru</h1>

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th><th>Nama</th><th>No.Hp</th><th>Mapel</th><th>Alamat</th><th>Alamat Email</th>
                    <a href="input-guru.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from guru order by id_guru ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_guru']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['no_hp']?></td>
                <td><?php echo $row['mapel']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['email']?></td>
                <td>

                <a href="edit-guru.php?id=<?php echo $row['id_guru']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-guru.php?id=<?php echo $row['id_guru']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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