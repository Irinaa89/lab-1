<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../forms_style.css" />
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