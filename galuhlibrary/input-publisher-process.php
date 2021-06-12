<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $publisher_name = $_POST['publisher_name'];
        $sql = "INSERT INTO publishers (publisher_name) VALUE ('$publisher_name')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: publishers.php?status=success');
        } else {
            header('Location: publishers.php?status=failed');
        }
    } else {
        die("Access Denied!");
    }
?>