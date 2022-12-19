<?php 
require 'database.php';

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc(($result))){
      $rows[] = $row;
  }
  return $rows;
}

$rincian = query("SELECT * FROM user");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Team 12</title>
</head>

<body>
  <div class="main">
    <div>
      <h2><span>Team Member 12</span></h2>
      <h3>The three of us created a web called "Data Peminjaman Buku"</h3>
      </div>
    </div>
  </div>

  <section class="projects" id="projects">
    <h2 class="title">Team Work</h2>
    <div class="content">
      <div class="project-card">
        <div class="ptoject-image">
          <img src="https://i.ibb.co/1r9Lzfh/IMG-20221006-005221.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">3337210036</p>
          <strong class="project-title">
            <span>Haikal Azka Raffasya</span>
          </strong>
        </div>
      </div>

      <div class="project-card">
        <div class="ptoject-image">
          <img src="https://i.ibb.co/rFQx9TT/IMG-20220724-161015-076.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">3337210011</p>
          <strong class="project-title">
            <span>Mulyadi</span>
          </strong>
        </div>
      </div>

      <div class="project-card">
        <div class="ptoject-image">
          <img src="https://i.ibb.co/sqv6vzX/IMG-20221212-WA0007.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">3337210047</p>
          <strong class="project-title">
            <span>Muhamad Fadjar Yulianto</span>
          </strong>
        </div>
      </div>
      <div class="project-card">
        <div class="ptoject-image">
          <img src="https://i.ibb.co/mtXJy4R/IMG-20221212-WA0008.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">3337210048</p>
          <strong class="project-title">
            <span>Zahrani Anindita Sahara</span>
          </strong>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
