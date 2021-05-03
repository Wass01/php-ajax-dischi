<?php
  include "dati.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php dischi</title>
  <link rel="stylesheet" href="./dist/css/master.css">
</head>
<body>
  <!-- header -->
  <?php include __DIR__ . "/partials_php/header.php" ?>

  <!-- main -->
  <main>
    <div class="container card-container">
      <?php foreach($dischi as $key) { ?>
        <div class="card">
          <img class="poster" src="<?= $key['poster']; ?>" alt="poster">
          <div class="card-hover">
            <h3 clas="title"><?= $key['title'] ?></h3>
            <p class="author"><?= $key['author'] ?></p>
            <p class="year"><?= $key['year'] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

  </main>

</body>
</html>
