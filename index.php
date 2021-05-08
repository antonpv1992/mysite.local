<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1, initial-scale=1.0">
  <title>Mysite.local</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="styles/bundle.min.css">
  <script defer src="scripts/bundle.min.js"></script>
</head>
<body>
  <header class='header'>
    <h2 class='header__welcome'>Hello, <strong>Nix education!</strong></h2>
  </header>
  <nav class='navigation'>
    <ul class='navigation__list'>
      <li class='navigation__item'>
        <a class='navigation__link' href='#lesson_1'>Урок 1 <i class="fas fa-long-arrow-alt-down"></i></a>
      </li>
      <li class='navigation__item'>
        <a class='navigation__link' href='#lesson_2'>Урок 2 <i class="fas fa-long-arrow-alt-down"></i></a>
      </li>
      <li class='navigation__item'>
        <a class='navigation__link' href='#lesson_3'>Урок 3 <i class="fas fa-long-arrow-alt-down"></i></a>
      </li>
    </ul>
  </nav>
  <main class='content'>
    <section class='content__multi-tables'>
      <h3 class='content__sub-title'>Таблица умножения</h3>
      <table id="lesson_1" class='content__table'>
          <?php
            include_once 'helpers/functions.php';
            outputTable();
          ?>
      </table>
    </section>
    <section class='content__multi-tables'>
      <h3 class='content__sub-title'>
          <?php paintWord('Цветная') ?> таблица умножения
      </h3>
      <table id="lesson_2" class='content__table'>
          <?php outputTable(true); ?>
      </table>
    </section>
    <section class='content__form-container'>
      <h3 class='content__sub-title'>Форма</h3>
      <form id="lesson_3" class='content__form form' action="/action.php" method="post">
      </form>
    </section>
  </main>
  <footer class='footer'>
    <h6 class='footer__copy'><i class="fas fa-copyright"></i> Created by <a href="https://github.com/antonpv1992">Antonpv1992</a></h6>
  </footer>
  <div class='scroll-top'>
    <i class="fa fa-long-arrow-up"></i>
    <span class='button-shadow'></span>
  </div>
</body>
</html>