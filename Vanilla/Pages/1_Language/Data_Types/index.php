<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.05.2020
 * Time: 16:15
 */

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";

?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#numbers">Числа</a></li>
            <li><a href="#strings">Строки</a></li>
            <li><a href="#arrays">Массивы</a></li>
            <li><a href="#array-methods">Методы массивов</a></li>
            <li><a href="#iterated-objects">Перебираемые объекты</a></li>
            <li><a href="#map-n-set">Map и Set</a></li>
            <li><a href="#object-kve">Object.keys, values, entries</a></li>
            <li><a href="#switch">Деструктурирующее присваивание</a></li>
            <li><a href="#switch">Дата и время</a></li>
            <li><a href="#switch">Формат JSON, метод toJSON</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Типы данных</h2>
        <? include_once __DIR__ . "/themes/Numbers.php"; ?>
        <? include_once __DIR__ . "/themes/Strings.php"; ?>
        <? include_once __DIR__ . "/themes/Arrays.php"; ?>
        <? include_once __DIR__ . "/themes/ArrayMethods.php"; ?>
        <? include_once __DIR__ . "/themes/IteratedObjects.php"; ?>
        <? include_once __DIR__ . "/themes/MapNSet.php"; ?>
        <? include_once __DIR__ . "/themes/ObjectKVE.php"; ?>
    </div>
</div>
