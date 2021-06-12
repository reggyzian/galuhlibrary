<?php include("master/head.php"); ?>

<div class="container">
    <form action="input-user-process.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Input Data Peminjam Buku</h6>
            </div>
            <div class="card-body">
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Nama Peminjam</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Masukan nama penulis buku" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" placeholder="Masukan alamat peminjam buku" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="nomor_telepon" placeholder="Masukan nomor telepon peminjam buku" required>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="input" class="btn btn-primary float-end">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php include("master/foot.php"); ?>