<?php

    require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комната админа</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
      <div class="header__menu">
        <div class="header__wrap wrap">
          <a class="header__log" href="">
            <img class="header__logo-img" src="img/design-pro.svg" alt="Логотип компании DESIGN.PRO">
          </a>
          <nav class="nav">
            <ul class="nav__list"> 
                <li class="nav__item">
                  <a href="admin/index.php" class="nav__link">Админка</a>
                </li>
                <li class="nav__item">
                  <a href="logout.php" class="nav__link">Выйти</a>
                </li>
                <li class="nav__item">
                  <a href="logout.php" class="nav__link">Выйти</a>
                </li>
                <!-- <li class="nav__item">
                <button class="theme">Изменить тему</button>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>

      <div class="header__title-wrap wrap">
        <h1 class="h1">Заявки клиентов</h1>
      </div>
    </header>

    <section class="wrap">
    
    <div class="apps">
      <?php

        $orders = $mysqli->query("SELECT * FROM `orders`");

        while ($row = $orders->fetch_assoc()) {

          echo '<article style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%), url(\'' . $row['img'] . '\') no-repeat center center;">';
          echo '<div class="date">';
          echo '<span>' . strftime("%x", $row['create']) . '</span>';
          echo '</div>';
          echo '<div class="info">';
          echo '<span class="kat">' . $row['category'] . '-дизайн</span>';
          echo '<h3 class="h3">Заявка #' . $row['id'] . '</h3>';
          echo '</div>';
          echo '</article>';
        }

      ?>
      </div>  
    </section>

    <footer>
      <div class="footer">
        <p>DESIGN.PRO © 2014 - 2020</p>
        <ul class="footer__list">
          <li class="li_1">
            <a href="">
              <img src="img/Vector.svg" alt="" width="24px" height="24px">
            </a>
          </li>
          <li class="li_1">
            <a href="https://www.instagram.com/ill_olle_lli/">
              <img src="img/inst.svg" alt="" width="24px" height="24px">
            </a>
          </li>
          <li class="li_1">
            <a href="https://vk.com/id298246922">
              <img src="img/vk.svg" alt="" width="24px" height="24px">
            </a>
          </li>
        </ul>
      </div>
    </footer>
</body>
</html>