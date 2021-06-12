<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $title = $_POST['title'];
        $writer_id = $_POST['writer_id'];
        $category_id = $_POST['category_id'];
        $publisher_id = $_POST['publisher_id'];
        $status = $_POST['status'];
        $sql = "INSERT INTO books (title, writer_id, category_id, publisher_id, status) VALUE ('$title','$writer_id','$category_id','$publisher_id','$status')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: books.php?status=success');
        } else {
            header('Location: books.php?status=failed');
        }
    } else {
        die("Access Denied!");
    }
?>