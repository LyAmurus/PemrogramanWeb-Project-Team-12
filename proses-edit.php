<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="tambah.css">
</head>

    <body>

        <?php
        include "database.php";

        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $judul = $_POST['judul'];
            $genre = $_POST['genre'];
            $tanggal = $_POST['tanggal'];
            $status = $_POST['status'];

            $result = mysqli_query($conn, "UPDATE user SET nama='$nama',judul='$judul',genre='$genre',tanggal='$tanggal', keterangan = '$status' WHERE id = '$id'");

            if ($result == TRUE) {
                echo '<script type="text/javascript">
            swal.fire({
                title: "Berhasil",
                 icon: "success",
                text: "Data Berhasil Diubah !",
                type: "success"
            })
            .then(function() {
                window.location = "Dashboard.php";
            });
    </script>';
            } else {
                echo '<script type="text/javascript">
    swal.fire({
        title: "Gagal !",
         icon: "error",
        text: "Data Gagal Diubah ! Silahkan Hub Admin",
        type: "error"
    }).then(function() {
        window.location = "edit.php";
    });
    </script>';
            }
        }
        ?>
    </body>
