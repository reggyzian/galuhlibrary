<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $writer_name = $_POST['writer_name'];
        $sql = "INSERT INTO writers (writer_name) VALUE ('$writer_name')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: writers.php?status=success');
        } else {
            header('Location: writers.php?status=failed');
        }
    } else {
        die("Access Denied!");
    }
?>