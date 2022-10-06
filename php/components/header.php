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
    <link rel="stylesheet" href="../style.css" />
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