<?php
$title="VASYA&KUKA";

$today= date("m.d.y");
$time = date("G:i:s");

$s = date("s");
$os = (int)$s % 2;

$kuka;
$vasya;

if($os == 0){
    $kuka = "Kuka-1";
    $vasya = "Vasya-1";
} else {
    $kuka = "Kuka-2";
    $vasya = "Vasya-2";
}

$menu_list = ["Главная", "О Васе", "О Куке", "Контакты"];
$id_list = ["header", "vasya", "kuka", "footer"];
 ?>







<!DOCTYPE html>
<html lang="ru">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title><?php echo $title ?></title>
  </head>
  <body>
    <header id="header" class="header">
      <div class="wrapper">
        <div class="header__wrapper">
          <div class="logo">VASYA&KUKA</div>
          <div class="nav"></div>
          <ul class="menu">
            <?php for($i = 0; $i < count($menu_list); $i++): ?>
            <?php echo '<li class="menu__item"><a href="#',$id_list[$i],'">',$menu_list[$i],'</a></li>' ?>
            <?php endfor ?>
            <li class="menu__item">
                <?php echo '<a href="./feedback.php">Жалоба/Предложение</a>' ?>
              
            </li>
            <li class="menu__item">
            <?php echo '<a href="./login.php">Войти в аккаунт</a>' ?>
              
            </li>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <section class="preview">
        <div class="wrapper">
          <div class="preview__wrapper">
            <div class="image">
                <?php echo '<img src="./img/',$kuka,'.jpg" alt="Кука" width="300" height="400" />' ?>
                <?php echo ' <img src="./img/',$vasya,'.jpg" alt="Вася" width="300" height="400" />' ?>
            </div>
            <div class="info">
              <h3 class="info__title">Всем привет!</h3>
              <p class="info__text">
                Нас зовут Вася и Кука и мы самые милые котики во всей вселенной!
                Мы вам хотим рассказать, как проходит наш обычный день.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="cat">
        <div class="wrapper">
          <div class="cat__wrapper">
            <div class="cat__info">
              <h2 id="vasya" class="cat__title">Привет, я Вася!</h2>
              <p class="cat__text">
                Начну с того, как проходит мое утро. А оно начинается с зарядки.
                Сразу после моего пробуждения начинается пробежка по квартире. У
                меня нет определенного графика приема пищи. Ем по необходимости.
                Целыми днями я люблю ходить из комнаты в комнату в поисках
                лучшего обзора с окна. Ведь я должен иметь лучший вид на улицу!
                Я люблю поспать днем, а еще лучше в объятиях у хозяйки. Вечером
                я также устраиваю тренировку и потом играюсь с игрушками.
              </p>
            </div>
            <img
              src="./img/Vasya-sleep.jpg"
              alt="Vasya-sleep"
              width="400"
              height="500"
            />
          </div>
        </div>
      </section>

      <section class="cat">
        <div class="wrapper">
          <div class="cat__wrapper">
            <img
              src="./img/Kuka-eat.jpg"
              alt="Kuka-eat"
              width="400"
              height="500"
            />
            <div class="cat__info">
              <h2 id="kuka" class="cat__title">Привет, я Кука!</h2>
              <p class="cat__text">
                Теперь я расскажу, как проходит мой обычный день. Мое утро
                начинается с того, что я бужу свою хозяйку в 5 часов и прошу ее
                наложить мне поесть. После этого я терпеливо жду, пока она
                проснется. Иногда это происходит очень долго! После завтрака мне
                нужно умыться, а после обойти всю квартиру, чтобы проверить ее
                на чистоту. День проходит скучно. В 13.00 у меня обед, а после я
                снова умываюсь и иду спать. А вот вечер у меня веселый. После
                ужина я люблю побегать по квартире, погулять или сесть на
                подоконник и за всеми следить. А потом я устаю и ложусь спать,
                перед этим не забыв поесть перед сном.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Table section-->
      <section class="table" id="table">
        <div class="wrapper">
          <h1 class="table__title">Сравнение Васи и Куки</h1>
          <table border="1" width="50%" title="Плюсы иметь котенка">
            <tr>
              <td>Характер</td>
              <td>Вася</td>
              <td>Кука</td>
            </tr>
            <tr>
              <td>Поднимает настроениe</td>
              <td>+</td>
              <td>+</td>
            </tr>
            <tr>
              <td>Поддержит в трудную минуту</td>
              <td>+</td>
              <td>+</td>
            </tr>
            <tr>
              <td>Не предаст</td>
              <td>+</td>
              <td>+</td>
            </tr>
          </table>
        </div>
      </section>
    </main>

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
