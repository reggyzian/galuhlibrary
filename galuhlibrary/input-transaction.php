<?php include("master/head.php"); ?>

<div class="container">
    <form action="input-transaction-process.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Input Transaksi Peminjaman Buku</h6>
            </div>
            <div class="card-body">
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Judul Buku</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="book_id" id="book_id">
                            <option selected disabled>Pilih kategori</option>
                            <?php
                                $sql = "SELECT * FROM books WHERE status='Tersedia'";
                                $query = mysqli_query($db, $sql);
                                
                                while($books = mysqli_fetch_array($query)){
                                    echo "<option value='".$books['book_id']."'>".$books['title']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Nama Peminjam</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="user_id" id="user_id">
                            <option selected disabled>Pilih peminjam</option>
                            <?php
                                $sql = "SELECT * FROM users";
                                $query = mysqli_query($db, $sql);

                                while($users = mysqli_fetch_array($query)){
                                    echo "<option value='".$users['user_id']."'>".$users['nama']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="start" value="<?php echo date('Y-m-d')?>">
                <input type="hidden" name="end" value="<?php echo date('Y-m-d', strtotime(date('Y-m-d') .'+1 week'))?>">
                <input type="hidden" name="status" value="Belum Dikembalikan">
            </div>
            <div class="card-footer">
                <button type="submit" name="input" class="btn btn-primary float-end">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php include("master/foot.php"); ?>