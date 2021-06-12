<?php 
    include("master/head.php");
    include("koneksi.php");
    
    if( !isset($_GET['user_id']) ){
        header('Location: index.php');
    }

    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE user_id=$user_id";
    $query = mysqli_query($db, $sql);
    $users = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("Not Found");
    }
?>

<div class="container">
    <form action="update-user-process.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Input Data Peminjam Buku</h6>
            </div>
            <div class="card-body">
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Nama Peminjam</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?php echo $users['nama'] ?>" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" required><?php echo $users['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="nomor_telepon" value="<?php echo $users['nomor_telepon'] ?>" required>
                    </div>
                </div>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $users['user_id'] ?>">
            <div class="card-footer">
                <button type="submit" name="input" class="btn btn-primary float-end">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php include("master/foot.php"); ?>