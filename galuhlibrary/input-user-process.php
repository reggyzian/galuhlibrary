<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $sql = "INSERT INTO users (nama, alamat, nomor_telepon) VALUE ('$nama','$alamat','$nomor_telepon')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: users.php?status=success');
        } else {
            header('Location: users.php?status=failed');
        }
    } else {
        die("Access Denied!");
    }
?>