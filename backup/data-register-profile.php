<?php
include 'koneksi.php';

session_start();

$username_value = "";

// Periksa apakah pengguna sudah login
if(isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];

    // Ambil username dari database berdasarkan ID pengguna yang disimpan dalam session
    $query = "SELECT username FROM login WHERE id = $id_user";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $username_value = $row['username'];
    }
}

if (isset($_POST['submit'])) {
    // Tangkap data dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $jenjang = mysqli_real_escape_string($conn, $_POST['jenjang']);
    $institusi = mysqli_real_escape_string($conn, $_POST['institusi']);

    // Lakukan validasi data jika diperlukan

    // Masukkan data ke dalam database
    $insert_query = "INSERT INTO profile (nama, tanggal_lahir, alamat, jenjang, institusi, id_user) 
                     VALUES ('$nama', '$tanggal_lahir', '$alamat', '$jenjang', '$institusi', '$id_user')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        header('Location:home.html');
        exit();
    } else {
        echo "Gagal menyimpan data ke database";
    }
} 
?>