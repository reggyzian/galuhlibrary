<?php include("master/head.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Publishers</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success float-end" href="input-publisher.php"><i class="fas fa-plus-circle"></i> Input Penerbit Baru</a>
        </div>
    </div>
    <div class="card card-light">
        <div class="card-body">
            <table class="table table-bordered" id="publishers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM publishers";
                        $query = mysqli_query($db, $sql);

                        while($publishers = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>".$publishers['publisher_id']."</td>";
                            echo "<td>".$publishers['publisher_name']."</td>";
                            echo "<td style='width:10%'>";
                            echo "<a class='btn btn-danger btn-sm' href='delete-publisher.php?publisher_id=".$publishers['publisher_id']."#publishers'><i class='fas fa-trash'></i></a>";
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