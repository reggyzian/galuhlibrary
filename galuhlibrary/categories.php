<?php include("master/head.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Categories</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success float-end" href="input-category.php"><i class="fas fa-plus-circle"></i> Input Kategori Baru</a>
        </div>
    </div>
    <div class="card card-light">
        <div class="card-body">
            <table class="table table-bordered" id="categories">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM categories";
                        $query = mysqli_query($db, $sql);

                        while($categories = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>".$categories['category_id']."</td>";
                            echo "<td>".$categories['category_name']."</td>";
                            echo "<td style='width:10%'>";
                            echo "<a class='btn btn-danger btn-sm' href='delete-category.php?category_id=".$categories['category_id']."#categories'><i class='fas fa-trash'></i></a>";
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