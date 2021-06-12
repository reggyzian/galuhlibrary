<?php include("master/head.php"); ?>

<div class="container">
    <form action="input-book-process.php" method="POST">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">Input Data Buku</h6>
            </div>
            <div class="card-body">
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Judul Buku</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" placeholder="Masukan judul buku" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Penulis</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="writer_id" id="writer_id">
                            <option selected disabled>Pilih penulis</option>
                            <?php
                                $sql = "SELECT * FROM writers";
                                $query = mysqli_query($db, $sql);

                                while($writers = mysqli_fetch_array($query)){
                                    echo "<option value='".$writers['writer_id']."'>".$writers['writer_name']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Kategori</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="category_id" id="category_id">
                            <option selected disabled>Pilih kategori</option>
                            <?php
                                $sql = "SELECT * FROM categories";
                                $query = mysqli_query($db, $sql);
                                
                                while($categories = mysqli_fetch_array($query)){
                                    echo "<option value='".$categories['category_id']."'>".$categories['category_name']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3">Penerbit</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="publisher_id" id="publisher_id">
                            <option selected disabled>Pilih penerbit</option>
                            <?php
                                $sql = "SELECT * FROM publishers";
                                $query = mysqli_query($db, $sql);
                                
                                while($publishers = mysqli_fetch_array($query)){
                                    echo "<option value='".$publishers['publisher_id']."'>".$publishers['publisher_name']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <input type="hidden" name="status" value="Tersedia">
            <div class="card-footer">
                <button type="submit" name="input" class="btn btn-primary float-end">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php include("master/foot.php"); ?>