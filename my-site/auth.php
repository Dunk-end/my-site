<?php

    require_once 'connect.php';

    $login = trim($_POST['login']); 
    $password = trim($_POST['password']);
    $errors = [];

    if (isset($_POST['done'])) {
      $login = trim($_POST['login']); 
      $users = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login'");
      
      while ($row = $users->fetch_assoc()) {
        $g_type = $row['type'];
        $g_login = $row['login'];
        $g_password = $row['password'];
        $g_name = $row['full_name'];
      }

      if (count($g_login) > 0) {
        if (password_verify($password, $g_password)) {
          $_SESSION['user_login'] = $g_login;
          $_SESSION['user_name'] = $g_name;
          if ($g_type !== '1') {
            header("Location: ../lk.php");
          } else {
            header("Location: ../admin.php");
          }
        } else {
          $errors[] = 'Пароль не верный!';
        }
      } else {
        $errors[] = 'Такого пользователя не существует!';
      }

    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация</title>
</head>
<body>
  <header class="header-2">
    <div class="header__menu-2">
      <div class="header__wrap-2 wrap">
        <a class="header__log-2" href="index.php">
          <img class="header__logo-img-2" src="img/Design.pro.svg" alt="Логотип компании DESIGN.PRO">
        </a>
        <nav class="nav-2">
          <ul class="nav__list-2"> 
            <li class="nav__item-2">
              <a class="nav__link-2" href="reg.php">Регистрация</a>
            </li>
            <li class="nav__item-2">
                <a class="nav__link-2" href="auth.php">Авторизация</a>
            </li>
            <li class="nav__item">
                <div class="dropdown-forms">
                <img src="img/gamburger-black.svg" alt="" width="16px" height="13px">
                  <div class="dropdown-content-forms">
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
  </header>
    <main>
      <div class="forms">
        

        <?php

          if (isset($_SESSION['user_login'])) {
            require 'lk.php';
          } else {
            
        ?> 



              <img class="img__3" src="img/aside.jpg" alt="" width="696px" height="765px"> 

              <form method="POST" class="form__auth">
                <div class="auth">

                <?php

                      if (!empty($errors)) {
                        echo '<p class="message"> ' . array_shift($errors) . ' </p>';
                      } 
                      if ($_SESSION['message']) { 
                        echo '<p class="message__2">' . $_SESSION['message'] . '</p>';
                        unset($_SESSION['message']);
                      }
                      
                        
                ?>

                  <h1 class="h1_h1" align="center">Авторизация</h1>

                  <label class="lab" for="login">
                    Логин
                    <input type="text" id="login" name="login" placeholder="Ваш логин" required value="<?= @$login ?>">
                  </label><br>

                  <label class="lab" for="password">
                    Пароль
                    <input type="password" id="password" name="password" placeholder="Введите пароль" required>
                  </label><br>

                  <button type="submit" name="done" class="app__2">Войти</button>
                </div>
              </form>
            <?php
          }

        ?> 

      </div>  
    </main>
    
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