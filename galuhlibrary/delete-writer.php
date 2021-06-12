<?php
    include("koneksi.php");

    if( isset($_GET['writer_id']) ){
        $writer_id = $_GET['writer_id'];
        $sql = "DELETE FROM writers WHERE writer_id=$writer_id";
        $query = mysqli_query($db, $sql);

        if( $query ){
            header('Location: writers.php');
        } else {
            die("Failed to delete data");
        }
    } else {
        die("Access Denied!");
    }
?>