<?php

    require_once 'connect.php';
      if (isset($_POST['done'])) {
        $errors = [];
        $message = []; 
        $full_name = trim($_POST['full_name']);
        $login = trim($_POST['login']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);
        $type = 0;

        if ($password !== $password2) {

          $errors[] = 'Пароли не совпадают!';

        } else {

          $password = password_hash($password, PASSWORD_DEFAULT);

          $result = $mysqli->query("INSERT INTO `users` (`full_name`, `login`, `type`, `email`, `password`) VALUES ('$full_name', '$login', '$type', '$email', '$password')");

          if ($result) {

            // $message[] = 'Регистрация прошла успешно! <a href="auth.php">Войти</a>';
            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header("Location: ../auth.php");

          } else {
            $errors[] = 'Неуспешная регистрация!';
          }
        }
      }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
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
              <div class="reg">
                <a class="nav__link-2" href="reg.php">Регистрация</a>
              </div>
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
        <form  method="POST">


        <div class="reg">
              <?php

                if (!empty($errors)) {
                  echo '<p class="message"> ' . array_shift($errors) . ' </p>';
                }  
                if (!empty($message)) {
                  echo '<p class="message__2"> ' . array_shift($message) . ' </p>';
                }

              ?>

              <h1 class="h1_h1">Регистрация</h1>

              <label class="lab" for="full_name">
                <input type="text" id="full_name" name="full_name" placeholder="ФИО">
              </label><br>
              

              <label class="lab" for="login">
                <input type="text" id="login" name="login" placeholder="Ваш логин" required>
              </label><br>

              <label class="lab" for="email">
                <input type="email" id="email" name="email" placeholder="Ваш email" required>
              </label><br>
              

              <label class="lab" for="password">
                <input type="password" id="password" name="password" placeholder="Введите пароль" required>
              </label><br>
              

              <label class="lab" for="password2">
                 
                <input type="password" id="password2" name="password2" placeholder="Повторите пароль" required>
              </label><br>

              <label class="flex">
                  <input type="checkbox" class="checkbox" checked>
                  <pre> Соглашаюсь с политикой обработки 
 персональных данных</pre>
              </label><br>

              <button type="submit" name="done" class="app__1">Зарегистрироваться</button>
            </div>      
        </form>
        <img class="img__2" src="img/aside.jpg" alt="" width="696px" height="765px">
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