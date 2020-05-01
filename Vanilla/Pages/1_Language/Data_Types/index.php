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
            <li><a href="#if-else">Строки</a></li>
            <li><a href="#logical-operators">Массивы</a></li>
            <li><a href="#cycles">Методы массивов</a></li>
            <li><a href="#switch">Перебираемые объекты</a></li>
            <li><a href="#switch">Map и Set</a></li>
            <li><a href="#switch">WeakMap и WeakSet</a></li>
            <li><a href="#switch">Object.keys, values, entries</a></li>
            <li><a href="#switch">Деструктурирующее присваивание</a></li>
            <li><a href="#switch">Дата и время</a></li>
            <li><a href="#switch">Формат JSON, метод toJSON</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Типы данных</h2>
        <? include_once __DIR__ . "/themes/Numbers.php"; ?>
    </div>
</div>