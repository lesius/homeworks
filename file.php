<?php
/**
 * Created by PhpStorm.
 * User: lisovyk
 * Date: 26.08.16
 * Time: 13:26
 */
header('Content-Type: text/html; charset=utf-8');

$f = fopen('file.txt', 'w');
fwrite($f, '1');
fclose($f);

$f = fopen('file.txt', 'a');
fwrite($f, PHP_EOL . '22');
fclose($f);

$f = fopen('file.txt', 'a');
fwrite($f, PHP_EOL . '333');
fclose($f);

$f = fopen('file.txt', 'a');
fwrite($f, PHP_EOL . '4444');
fclose($f);

$f = fopen('file.txt', 'a');
fwrite($f, PHP_EOL . '55555');
fclose($f);

$f = fopen('file.txt', 'r');
$text = fread($f, 6);
echo $text;