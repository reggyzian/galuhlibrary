<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $book_id = $_POST['book_id'];
        $user_id = $_POST['user_id'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $status = $_POST['status'];

        $sql = "INSERT INTO transactions (book_id, user_id, start, end, status) VALUE ('$book_id','$user_id','$start','$end', '$status');
                UPDATE books SET status='Sedang Dipinjam' WHERE book_id=$book_id";
        $query = mysqli_multi_query($db, $sql);

        if( $query ) {
            header('Location: transactions.php?status=success');
        } else {
            header('Location: transactions.php?status=failed');
        }
    } else {
        die("Access Denied!");
    }
?>