<?php
include 'koneksi.php';

$username_value = ""; // Variabel untuk menyimpan nilai awal input form username

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header('Location: register-profile.php?success=true');
        exit;
    } else {
        echo "Gagal menyimpan data ke database";
    }
} else {
    echo "Harap isi email, username, dan password";
    
    // Tetapkan nilai awal input form username dari variabel jika ada
    if(isset($_POST['username'])){
        $username_value = $_POST['username'];
    }
}
?>