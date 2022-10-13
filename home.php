<?php 
$title = "Написать отзыв"; // -- Название страницы

$today = date("m.d.y");  // -- Текущий год, месяц, день
$time = date("G:i:s"); // -- Текущее время

$menu_list = ["Главная", "Жалобы/предложения", "Войти"]; // -- Список меню
$pages_list = ["index", "feedback", "login"]; // -- Страницы


$login = "Ira";
$password = "979";
?>

<?php require("components/forms_header.php")?>

<div class="response_wrapper">
    <div class="response">
        <?php 

        if (isset($_POST['typeOfselect'])) {
         
            echo '<h1>Ваш запрос отправлен!</h1> <p> Здравствуйте, '.$_POST['fio'].'</p>'; //выводим ФИО
            if ($_POST['typeOfselect'] == 'Предложение'){ //проверяем тип обращения
                    echo '<p>Спасибо за ваше <strong>предложение:</strong></p>';
                    echo '<textarea readonly disabled>'.$_POST['message'].'</textarea>';//вывод текста сообщения
            } else {
                    echo '<p>Мы рассмотрим Вашу <strong>жалобу</strong>:</p>';
                    echo '<textarea readonly disabled>'.$_POST['message'].'</textarea>';
            }


            if (isset($_POST['file_name']) & $_POST['file_name'] != '') echo '<p>Вы приложили следующий файл: ' .$_POST['file_name'].'</p>';

            echo '<a href="feedback.php?F='.$_POST['fio'].'&E='.$_POST['email'].'&M='.$_POST['message'].'"><button class="btn">Заполнить снова</button></a>';

        } else {
            if (($_POST["login"] == $login) && ($_POST["password"] == $password)) {
                echo "<h1 class='success'>Вы успешно авторизовались!</h1>";
            } else {
                echo "<h1 class='error'>Неверный логин или пароль!</h1>";
            }
        }
        ?>

        

        
    </div>
</div>
<?php require("components/footer.php")?>