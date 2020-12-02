<?php

    require_once 'connect.php';

    if (isset($_POST['done'])) {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $category = $_POST['category'];
        $img = $_FILES['img'];
        $status  = 'Новая';
        $user_id = 1;
        while ($_SESSION['us'] >= $_SESSION['us'] - 1) {
          $mysqli->query("INSERT INTO `orders` (`name`, `desc`, `category`, `img`, `status`, `user_id`) VALUES ('$name', '$desc', '$category', '$img', '$status', '$user_id')");
          $_SESSION['us'] = $user_id++;
          break;
        }  
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header-2">
    <div class="header__menu-2">
      <div class="header__wrap-2 wrap">
        <a class="header__log-2" href="">
          <img class="header__logo-img-2" src="img/Design.pro.svg" alt="Логотип компании DESIGN.PRO">
        </a>
        <nav class="nav-2">
            <ul class="nav__list-2"> 
                <li class="nav__item-2">
                  <p class="nav__link-p" style="color: black">Привет, <?=  $_SESSION['user_login'] ?></p>
                </li>
                <li class="nav__item-2">
                  <a href="logout.php" class="nav__link-3">Выйти</a>
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
  </header>

    <div class="forms">
        <form method="POST" enctype="multipart/form-data">


            <div class="reg">

              <h1 class="h1_h1">Создание заявки</h1>

              <input type="text" id="name" name="name" placeholder="Название"><br>
              
              <label for="">
                <select name="cetegory" id="cetegory">
                  <option value="">Категория</option>
                  <option value="2-d дизайн">2-d дизайн</option>
                  <option value="2-d дизайн">3-d дизайн</option>
                  <option value="эскиз">Эскиз</option>
                </select>
              </label>
              <br>

              <input type="file" name="img" accept="image/jpeg,image/png"><br> 

              <textarea id="desc" cols="30" placeholder="Описание" name="desc"></textarea><br>

              <button type="submit" name="done" class="app__1">Создать</button>
            </div> 
        </form>
        <img class="img__2" src="img/aside.jpg" alt="" width="696px" height="765px">     
    </div>  

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