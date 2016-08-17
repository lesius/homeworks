<?php
/**
 * Created by PhpStorm.
 * User: lisovyk
 * Date: 16.08.16
 * Time: 17:28
 */
header('Content-Type: text/html; charset=utf-8');


$players = array(
    array ( "Brawn", "small guard", "#1", "188", "86"),
    array ( "Jordan", "shooting guard", "#23", "201", "98"),
    array ( "Pippen", "small forward", "#33", "203", "95"),
    array ( "Rodman", "center forward", "#91", "201", "100"),
    array ( "Kukoch", "power forward", "#7", "211", "107"),
);

for ($i=0; $i < count($players); $i++) {
    echo '<br/>';
    for ($j = 0; $j < count($players[$i]); $j++) {
        echo $players[$i][$j];
        echo ' ';
    }
}

echo '<br/>';

sort($players);

for ($i=0; $i < count($players); $i++) {
    echo '<br/>';
    for ($j = 0; $j < count($players[$i]); $j++) {
        echo $players[$i][$j];
        echo ' ';
    }
}

echo '<br/>';


$players = array(
    array ( "name" => "Brawn", "position" => "small guard", "number" => "1", "height" => "188", "weight" => "86"),
    array ( "name" => "Jordan", "position" => "shooting guard", "number" => "23", "height" => "201", "weight" => "98"),
    array ( "name" => "Pippen", "position" => "small forward", "number" => "33", "height" => "203", "weight" => "95"),
    array ( "name" => "Rodman", "position" => "center forward", "number" => "91", "height" => "201", "weight" => "100"),
    array ( "name" => "Kukoch", "position" => "power forward", "number" => "7", "height" => "211", "weight" => "107"),
);

foreach ($players as $key => $row) {
    $name[$key]  = $row['name'];
    $position[$key] = $row['position'];
    $number[$key] = $row['number'];
    $height[$key] = $row['height'];
    $weight[$key] = $row['weight'];
}

array_multisort($number, SORT_ASC, $players);


foreach ($players as $key => $param) {
    echo '<br/>';
    foreach ($param as $subkey => $inparam) {
        echo "$inparam ";
    }
}

echo '<br/>';


foreach ($players as $key => $row) {
    $name[$key]  = $row['name'];
    $position[$key] = $row['position'];
    $number[$key] = $row['number'];
    $height[$key] = $row['height'];
    $weight[$key] = $row['weight'];
}


array_multisort($height, SORT_ASC, $players);

foreach ($players as $key => $param) {
    echo '<br/>';
    foreach ($param as $subkey => $inparam) {
        echo "$inparam ";
    }
}


