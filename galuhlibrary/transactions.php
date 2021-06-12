<?php include("master/head.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h1>Transaksi Peminjaman Buku</h1>
        </div>
        <div class="col-md-3">
            <a class="btn btn-success float-end" href="input-transaction.php"><i class="fas fa-plus-circle"></i> Input Transaksi Peminjaman Buku</a>
        </div>
    </div>
    <div class="card card-light">
        <div class="card-body">
            <table class="table table-bordered" id="transactions">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th style="width: 13%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT transactions.transaction_id, books.book_id, books.title, users.nama, transactions.start, transactions.end, transactions.status
                                FROM transactions 
                                    INNER JOIN books 
                                        ON books.book_id = transactions.book_id
                                    INNER JOIN users
                                        ON users.user_id = transactions.user_id
                                    ORDER BY transactions.transaction_id";
                        $query = mysqli_query($db, $sql);

                        while($transactions = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>".$transactions['transaction_id']."</td>";
                            echo "<td>".$transactions['title']."</td>";
                            echo "<td>".$transactions['nama']."</td>";
                            echo "<td>".$transactions['start']."</td>";
                            echo "<td>".$transactions['end']."</td>";
                            if($transactions['status'] == "Belum Dikembalikan"){
                                echo "<td>";
                                echo "<form action='update-transaction-process.php' method='POST'>";
                                echo "<input type='hidden' name='book_id' value='".$transactions['book_id']."'>";
                                echo "<input type='hidden' name='transaction_id' value='".$transactions['transaction_id']."'>";
                                echo "<button type='submit' name='input' class='btn btn-primary w-100'>Selesai Pinjam</button>";
                                echo "</form>";
                                echo "</td>";
                            }else{
                                echo "<td>".$transactions['status']."</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>        
    </div>
</div>
<?php include("master/foot.php"); ?>