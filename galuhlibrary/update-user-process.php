<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $user_id = $_POST['user_id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nomor_telepon = $_POST['nomor_telepon'];

        $sql = "UPDATE users SET user_id='$user_id', nama='$nama', alamat='$alamat', nomor_telepon='$nomor_telepon' WHERE user_id=$user_id";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: users.php');
        } else {
            die("Failed to delete data");
        }
    } else {
        die("Access Denied!");
    }
?>