<?php include("master/head.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Data Penulis Buku</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success float-end" href="input-writer.php"><i class="fas fa-plus-circle"></i> Input Penulis Baru</a>
        </div>
    </div>
    <div class="card card-light">
        <div class="card-body">
            <table class="table table-bordered" id="writers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Penulis</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM writers";
                        $query = mysqli_query($db, $sql);

                        while($writers = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>".$writers['writer_id']."</td>";
                            echo "<td>".$writers['writer_name']."</td>";
                            echo "<td style='width:10%'>";
                            echo "<a class='btn btn-danger btn-sm' href='delete-writery.php?writer_id=".$writers['writer_id']."#writers'><i class='fas fa-trash'></i></a>";
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