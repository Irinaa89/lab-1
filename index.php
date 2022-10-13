<?php
$title="VASYA&KUKA";

$today= date("d.m.y");
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

<?php require("components/header.php")?>
<?php require("components/main.php")?>
<?php require("components/footer.php")?>
