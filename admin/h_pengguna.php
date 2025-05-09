<?php
include "koneksi.php";

//Periksa apakah parameter id telah dikirim 
if (isset($_GET['id'])) {
    $id_user = $_GET['id'];
    
    //Query untuk menghapus data berdasarkan id_user
    $delete = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id_user'");

    //Notifikasi dan redirect
    if ($delete) {
        echo "<script>alert('Data pengguna berhasil dihapus!')</script>";
        header("refresh:0, pengguna.php");
    } else {
        echo "<script>alert('Gagal manghapus data pengguna!')</script>";
        header("refresh:0, pengguna.php");
    }
} else {
    echo "<script>alert('ID pengguna tidak ditemukan!')</script>";
    header("refresh:0, pengguna.php");
}
?>