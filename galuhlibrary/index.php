<?php include("master/head.php"); ?>
<div class="container">
    <div class="alert alert-warning alert-dismissible">
        Nyalakan internet untuk tampilan aplikasi yang baik dan benar
        Best view in Google Chrome
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-dark w-100" href="transactions.php"><h1><i class="fas fa-map"></i></h1>Transaksi Buku</a>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-dark w-100" href="users.php"><h1><i class="fas fa-user"></i></h1>Data Peminjam Buku</a>
                </div>
            </div>
        </div>        
    </div>
    <div class="card card-light">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-dark w-100" href="books.php"><h1><i class="fas fa-book"></i></h1>Data Buku</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-dark w-100" href="writers.php"><h1><i class="fas fa-edit"></i></h1>Data Penulis Buku</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-dark w-100" href="categories.php"><h1><i class="fas fa-tags"></i></h1>Data Kategori Buku</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-dark w-100" href="publishers.php"><h1><i class="fas fa-print"></i></h1>Data Penerbit Buku</a>
                </div>
            </div>
        </div>        
    </div>
</div>
<?php include("master/foot.php"); ?>