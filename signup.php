<?php
include 'koneksi.php';

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        header('Location: index.html?success=true');
        exit;
    } else {
        echo "Gagal menyimpan data ke database";
    }
} else {
    echo "Harap isi email, username, dan password";
}
?>
