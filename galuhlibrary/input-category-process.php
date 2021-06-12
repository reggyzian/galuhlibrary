<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $category_name = $_POST['category_name'];
        $sql = "INSERT INTO categories (category_name) VALUE ('$category_name')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: categories.php?status=success');
        } else {
            header('Location: categories.php?status=failed');
        }
    } else {
        die("Access Denied!");
    }
?>