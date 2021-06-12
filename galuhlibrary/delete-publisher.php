<?php
    include("koneksi.php");

    if( isset($_GET['publisher_id']) ){
        $publisher_id = $_GET['publisher_id'];
        $sql = "DELETE FROM publishers WHERE publisher_id=$publisher_id";
        $query = mysqli_query($db, $sql);

        if( $query ){
            header('Location: publishers.php');
        } else {
            die("Failed to delete data");
        }
    } else {
        die("Access Denied!");
    }
?>