<?php
/**
 * Created by PhpStorm.
 * User: lisovyk
 * Date: 07.09.16
 * Time: 21:05
 */
header('Content-Type: text/html; charset=utf-8');
error_reporting(1);

$name = $_POST['name'];
$number = $_POST['number'];
$position = $_POST['position'];
$height = $_POST['height'];

$player = $name."\t".$number."\t".$position."\t".$height."\n";

$f = fopen('team.txt', 'a');
if (empty($name) or empty($number) or empty($position) or empty($height)){
    echo "Одно или несколько полей не заполнены. Пожалуйста, заполните все поля формы.";
} else{
    fwrite($f, $player, strlen($player));
    fclose($f);
    echo "Игрок добавлен";
}


