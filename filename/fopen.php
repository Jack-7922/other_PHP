<?php
$f = fopen("date.txt", "a+") or die("Не могу открыть файл");
fputs($f, "\nLine six");
// //fread($f, 5);
// $lines = [];
// while ($line = fgets($f)) {
//     $lines[] = $line;
// }
// print_r($lines); 
// $bytes = [];
// while (!feof($f)) {
// 	$bytes[] = fgetc($f);
// }
// print_r($bytes);
//Закрытие потока
fclose($f);