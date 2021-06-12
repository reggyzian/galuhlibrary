<?php include("master/head.php"); ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Daftar Buku</h1>
            </div>
            <div class="col-md-2">
                <a class="btn btn-success float-end" href="input-book.php"><i class="fas fa-plus-circle"></i> Input Data Buku</a>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="card card-light">
            <div class="card-body">
                <table class="table table-bordered" id="books">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Status</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT books.book_id, books.title, books.status, categories.category_name, writers.writer_name, publishers.publisher_name
                                        FROM books 
                                            INNER JOIN categories 
                                                ON categories.category_id = books.category_id
                                            INNER JOIN writers
                                                ON writers.writer_id = books.writer_id
                                            INNER JOIN publishers
                                                ON publishers.publisher_id = books.publisher_id";
                            $query = mysqli_query($db, $sql);
                            
                            while($books = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>".$books['book_id']."</td>";
                                echo "<td>".$books['title']."</td>";
                                echo "<td>".$books['category_name']."</td>";
                                echo "<td>".$books['writer_name']."</td>";
                                echo "<td>".$books['publisher_name']."</td>";
                                echo "<td>".$books['status']."</td>";
                                echo "<td style='width:10%'>";
                                echo "<a class='btn btn-danger btn-sm' href='delete-book.php?book_id=".$books['book_id']."#books'><i class='fas fa-trash'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>        
        </div>
    </div>
</main>
<?php include("master/foot.php"); ?>