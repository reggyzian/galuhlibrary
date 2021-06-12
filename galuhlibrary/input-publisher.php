<?php include("master/head.php"); ?>

<div class="container">
    <form action="input-publisher-process.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Input Data Penerbit Buku</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3">Nama Penerbit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="publisher_name" placeholder="Masukan nama penerbit buku" required>
                        </div>
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