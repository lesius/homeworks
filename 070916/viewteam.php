<html>
<head>
  <meta charset="UTF-8">
  <title>Состав баскетбольной команды</title>
</head>
<body>
<h1>Состав баскетбольной команды</h1>
<h2>Сезон 2016</h2>
<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
   //Считывание всего файла
   //Каждый игрок становится элементом массива
  $players= file("team.txt");
   // Подсчет количества игроков, хранящихся в массиве
  $number_of_players = count($players);

//echo '<pre>';
//print_r($players);
//echo '<pre/>';

echo '<br/>';


  if ($number_of_players == 0)
  {
      echo '<p><strong>>Игроков в команде нет.</strong></p>';
  }
  echo '<table border=1>';
  echo '<tr><th bgcolor = \"#CCCCFF\">Имя</th>' .
      '<th bgcolor = \"#CCCCFF\">Номер</th>' .
      '<th bgcolor = \"#CCCCFF\">Позиция</th>' .
      '<th bgcolor = \"#CCCCFF\">Рост</th>' .
      '<tr>';
  for ($i=0; $i<$number_of_players; $i++)
  {
      //разбиение строк
      $line = explode( "\t", $players[$i] );

      $line[1] = intval( $line[1] );
      $line[2] = strval( $line[2] );
      $line[3] = intval( $line[3] );

      //вывод
        echo '<pre>';
        print_r($line);
        echo '<pre/>';

//      function compare ($x, $y){
//          if ($x[1] == $y[1])
//              return 0;
//          else if ($x[1] < $y[1])
//              return -1;
//          else
//              return 1;
//      }
//
//      usort($line[1], 'compare');

      echo "<tr>
                <td>$line[0]</td>
                <td>$line[1]</td>
                <td>$line[2]</td>
                <td>$line[3]</td>
            </tr>";
  }
  echo "</table>";
?>
</body>
</html>
