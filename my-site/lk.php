<?php

    require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
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
                  <p class="nav__link-p">Привет, <?=  $_SESSION['user_login'] ?></p>
                </li>
                <li class="nav__item">
                  <a href="logout.php" class="nav__link">Выйти</a>
                </li>
                <li class="nav__item">
                  <a href="logout.php" class="nav__link"></a>
                </li>
                <!-- <li class="nav__item">
                <button class="theme">Изменить тему</button>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>

      <div class="header__title-wrap wrap">
        <h1 class="h1">Мои заявки</h1>
      </div>
    </header>

    <section class="wrap">

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