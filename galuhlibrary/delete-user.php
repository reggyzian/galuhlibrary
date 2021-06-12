<?php
    include("koneksi.php");

    if( isset($_GET['user_id']) ){
        $user_id = $_GET['user_id'];
        $sql = "DELETE FROM users WHERE user_id=$user_id";
        $query = mysqli_query($db, $sql);

        if( $query ){
            header('Location: users.php');
        } else {
            die("Failed to delete data");
        }
    } else {
        die("Access Denied!");
    }
?>