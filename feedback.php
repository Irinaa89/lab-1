<?php
$title="Оставить отзыв";
$title="VASYA&KUKA";
$today= date("m.d.y");
$time = date("G:i:s");

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="forms_style.css" />
    <title><?php echo $title ?></title>
  </head>

  <body>
    <!-- Шапка -->
    <header id="header" class="header">
      <div class="wrapper">
        <div class="header__wrapper">
          <div class="logo">VASYA&KUKA</div>
          <div class="nav"></div>
          <ul class="menu">
            <li class="menu__item"> <?php echo '<a href="./index.php">Главная</a>' ?></li>
            <li class="menu__item">
            <?php echo ' <a href="./feedback.php">Жалоба/Предложение</a>' ?>
            </li>
            <li class="menu__item">
            <?php echo ' <a href="./login.php">Войти в аккаунт</a>' ?>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- Форма -->
    <div class="form-wrapper">
      <form action="https://httpbin.org/post" method="post">
        <!-- ФИО -->

        <label for="fio">ФИО</label>
        <input type="text" id="fio" name="fio" />

        <!-- Email -->

        <label for="email">Email</label>
        <input type="email" id="email" name="email" />

        <!-- Radio buttons -->
        <div class="input-wrapper">
          <input type="radio" id="r1" value="На работе" name="radioValue" />
          <label for="r1">На работе</label>

          <input type="radio" id="r2" value="От друзей" name="radioValue" />
          <label for="r2">От друзей</label>

          <input type="radio" id="r3" value="В объявлении" name="radioValue" />
          <label for="r3">В объявлении</label>
        </div>

        <!-- Select -->
        <select name="typeOfselect" id="select">
          <option value="Жалоба">Жалоба</option>
          <option value="Предложение">Предложение</option>
        </select>

        <!-- Text -->
        <label for="text">Введите ваше сообщение</label>
        <textarea id="text" name="message"></textarea>

        <!-- File input -->
        <input type="file" id="file" name="file_name" />

        <!-- Согласие на обработку данных -->
        <div class="input-wrapper">
          <input
            type="checkbox"
            id="consentToDataProcessing"
            name="consentToDataProcessing"
          />
          <label for="consentToDataProcessing"
            >Согласие на обработку персональных данных</label
          >
        </div>

        <!-- Submit Button -->
        <div class="btn">
          <button type="submit">Отправить</button>
        </div>
      </form>
    </div>

    <!-- Подвал -->
    <footer id="footer" class="footer">
      <div class="wrapper">
        <div class="footer__wrapper">
          <div class="footer__info">
            <p class="footer__title">Контакты:</p>
            <p class="footer__item">ФИО: Меркель Ирина Сергеевна</p>
            <p class="footer__item">Почта: irinamerkel979@gmail.com</p>
            <p class="footer__item">Тел.: 8-927-061-47-25</p>
            <p class="footer__item">
            <?php echo 'Сформировано ', $today, " в ", $time?></p>
          </div>
          <a class="footer__backToTop" href="#header">Вернуться наверх 🔼</a>
        </div>
      </div>
    </footer>
  </body>
</html>
