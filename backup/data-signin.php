<?php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if (isset($_POST['signin']) && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa kredensial dalam database
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika kredensial valid, arahkan ke halaman home.html
    if ($result->num_rows > 0) {
        header('Location: home.html');
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>
