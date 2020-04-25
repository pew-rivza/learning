<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.04.2020
 * Time: 2:00
 */

$fd = fopen("data.txt", 'a') or die("не удалось создать файл");
$didWrite = fwrite($fd, $_POST['answers'] . "\"");
fclose($fd);

echo $didWrite;