<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $reset_code = rand(100000, 999999);

    $sql = "UPDATE users SET reset_code='$reset_code' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Kode reset telah dikirim ke email Anda.";
        // Kirim email dengan kode reset
    } else {
        echo "Gagal mengirim kode reset.";
    }
}
?>
