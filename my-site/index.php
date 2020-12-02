<?php

    require_once 'connect.php';
    $count_task = count($mysqli->query("SELECT `user_id` FROM `orders`"));

?>

<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header class="header">
      <div class="header__menu">
        <div class="header__wrap wrap">
            <img class="header__logo-img" src="img/design-pro.svg" alt="Логотип компании DESIGN.PRO">
          <nav class="nav">
            <ul class="nav__list"> 
              <li class="nav__item">
                <a class="nav__link" href="reg.php">Регистрация</a>
              </li>
              <li class="nav__item">
                <a class="nav__link" href="auth.php">Авторизация</a>
              </li>
              <li class="nav__item">
              <div class="dropdown">
                <img src="img/gamburger.svg" alt="" width="16px" height="13px">
                  <div class="dropdown-content">
                    <a class="nav__link" href="reg.php">Регистрация</a>
                    <a class="nav__link" href="auth.php">Авторизация</a>
                  </div>
                </div>
              </li>
              <!-- <li class="nav__item">
                <button class="theme">Изменить тему</button>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>

      <div class="header__title-wrap wrap">
        <h1 class="h1">DESIGN.PRO – качественный экспресс-дизайн</h1>
      </div>
    </header>

    <section class="wrap">

      <div class="zag">
        <h2 class="h2">Выполненные заявки</h2>
        <p class="p">Заявок в работе: <span><?= $count_task ?></span></p>
      </div>

      <div class="apps">
        <article>
          <div class="date">
            <span >21 окт. 2020</span>
          </div>
          <div class="info">
            <span class="kat">2D Дизайн</span>
            <h3 class="h3">Заявка #176</h3>
          </div>
        </article>

        <article>
          <div class="date">
            <span>19 окт. 2020</span>
          </div>
          <div class="info">
            <span class="kat">3D Дизайн</span>
            <h3 class="h3">Заявка #273</h3>
          </div>
        </article>

        <article>
          <div class="date">
            <span>17 окт. 2020</span>
          </div>
          <div class="info">
            <span class="kat">2D Дизайн</span>
            <h3 class="h3">Заявка #131</h3>
          </div>
        </article>

        <article>
          <div class="date">
            <span>15 окт. 2020</span>
          </div>
          <div class="info">
            <span class="kat">Эскиз</span>
            <h3 class="h3">Заявка #142</h3>
          </div>
        </article>

      </div>  

      

    <button class="btn">
      <p class="text">Все заявки
      <img class="arrow" src="img/Arrow 3.svg" alt=""> 
      </p> 
    </button>
      
    </section>

    <footer>
      <div class="footer">
        <p>DESIGN.PRO © 2014 - 2020</p>
        <ul class="footer__list">
          <li class="li_1">
            <a href="https://www.pinterest.ru/">
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


    
    <script src="script.js"></script>

  </body>
</html>


