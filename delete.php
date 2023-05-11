<?php

include 'koneksi.php';

$id = $_GET['id']; 
$sql = "SELECT avatar FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $gambar = $row['avatar']; 

    if (file_exists($gambar)) {
        unlink($gambar);
    }

    $sql = "DELETE FROM users WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data pengguna dan file gambar berhasil dihapus.";
    } else {
        echo "Maaf, terjadi kesalahan saat menghapus data pengguna: " . mysqli_error($conn);
    }
} else {
    echo "Data pengguna tidak ditemukan.";
}
header("location:index.php");
exit;
?>