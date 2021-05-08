<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mysite.local Action</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="styles/bundle.min.css">
  <script defer src="scripts/bundle.min.js"></script>
</head>
<body>
  <section class='result'>
    <div class='result__container'>
      <p class='result__field'>
      <?php
          include_once 'helpers/functions.php';
          echo mb_strrev($_POST['string']);
      ?>
      </p>
    </div>
    <div class='result__container'>
        <a class='result__back-link' href="/index.php#lesson_3">
        <i class="fas fa-long-arrow-alt-left"></i>Назад
        <span class='button-shadow'></span>
      </a>
    </div>
  </section>
  <div class='scroll-top'>
    <i class="fa fa-long-arrow-up"></i>
    <span class='button-shadow'></span>
  </div>
</body>
</html>