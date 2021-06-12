<?php
    include("koneksi.php");

    if(isset($_POST['input'])){
        $transaction_id = $_POST['transaction_id'];
        $book_id = $_POST['book_id'];

        $sql = "UPDATE transactions SET status='Sudah Dikembalikan' WHERE transaction_id=$transaction_id;
                UPDATE books SET status='Tersedia' WHERE book_id=$book_id";
        $query = mysqli_multi_query($db, $sql);

        if($query){
            header('Location: transactions.php');
        } else {
            die("Failed to delete data");
        }
    } else {
        die("Access Denied!");
    }
?>