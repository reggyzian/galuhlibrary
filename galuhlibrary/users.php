<?php include("master/head.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>Data Peminjam Buku</h1>
        </div>
        <div class="col-md-3">
            <a class="btn btn-success float-end" href="input-user.php"><i class="fas fa-plus-circle"></i> Input Data Peminjam Buku</a>
        </div>
    </div>
    <div class="card card-light">
        <div class="card-body">
            <table class="table table-bordered" id="users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Peminjam</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM users";
                        $query = mysqli_query($db, $sql);

                        while($users = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>".$users['user_id']."</td>";
                            echo "<td>".$users['nama']."</td>";
                            echo "<td>".$users['alamat']."</td>";
                            echo "<td>".$users['nomor_telepon']."</td>";
                            echo "<td style='width:10%'>";
                            echo "<div class='btn-group'>";
                            echo "<a class='btn btn-danger btn-sm' href='delete-user.php?user_id=".$users['user_id']."#users'><i class='fas fa-trash'></i></a>";
                            echo "<a class='btn btn-primary btn-sm' href='update-user.php?user_id=".$users['user_id']."#users'><i class='fas fa-edit'></i></a>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>        
    </div>
</div>
<?php include("master/foot.php"); ?>