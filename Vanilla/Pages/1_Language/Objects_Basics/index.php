<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 19.04.2020
 * Time: 23:08
 */

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#objects">Объекты</a></li>
            <li><a href="#object-methods">Методы объекта, "this"</a></li>
            <li><a href="#switch">Преобразование объектов в примитивы</a></li>
            <li><a href="#switch">Конструкторы, создание объектов через "new"</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Объекты: основы</h2>
        <? include_once __DIR__ . "/themes/Objects.php"; ?>
        <? include_once __DIR__ . "/themes/ObjectMethods.php"; ?>
    </div>
</div>