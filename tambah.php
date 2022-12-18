<?php 
require 'database.php';

if (isset($_POST['submit'])) {
    // AMBIL DATA DARI FORM
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    
    // QUERY
    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama','$judul', '$genre', '$tanggal', '$status')");

    header("Location: Dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Data</title>
</head>
<body class="body-login">
    <div class="container-login">
        <h1>Tambah Data</h1>
        <div class="container-form">
            <form action="" method="post">
                <div class="input">
                    <input  type="text" name="nama" autocomplete="off" required>
                    <span>Nama</span>
                </div>
                <div class="input">
                    <input  type="text" name="judul" required>
                    <span>Judul Buku</span>
                </div>
                <div class="input">
                    <input  type="text" name="genre" autocomplete="off" required>
                    <span>Genre</span>
                </div>
                <div class="input">
                    <input  type="date" name="tanggal" required>
                    <span>Tanggal Peminjaman</span>
                </div>
                <div class="input">
                    <input  type="text" name="status" required>
                    <span>Status</span>
                </div>
                <div class="button">
                    <div class="button-input">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                    <div class="button-input">
                        <a href="Dashboard.php">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
