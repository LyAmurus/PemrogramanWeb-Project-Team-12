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
    <div class="body-login">
        <div class="container-login">
            <div class="card-header">
                <a href="Dashboard.php"><button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" /></svg></button></a>  <h1>Edit Data</h1>
            </div>
            <div class="container-form">
                <div class="body">
                    <div class="card-body">
                        <form action="proses-edit.php" method="POST">
                            <?php
                            include_once("database.php");
                            $id = $_GET["id"];
                            $sql = "SELECT * FROM user WHERE id = $id";
                            $query = mysqli_query($conn, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data['judul'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $data['genre'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row input-group date" id="datepicker">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Meminjam</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data['tanggal'] ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['keterangan'] ?>">
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="col-12" style="display: flex; margin-top: 20px; justify-content: center">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
