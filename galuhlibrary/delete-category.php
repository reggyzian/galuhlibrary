<?php
    include("koneksi.php");

    if( isset($_GET['category_id']) ){
        $category_id = $_GET['category_id'];
        $sql = "DELETE FROM categories WHERE category_id=$category_id";
        $query = mysqli_query($db, $sql);

        if( $query ){
            header('Location: categories.php');
        } else {
            die("Failed to delete data");
        }
    } else {
        die("Access Denied!");
    }
?>