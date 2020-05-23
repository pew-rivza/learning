<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#inheritance">Наследование классов</a></li>
            <li><a href="#mixins">Примеси</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Классы</h2>
        <? include_once __DIR__ . "/themes/Inheritance.php"; ?>
        <? include_once __DIR__ . "/themes/Mixins.php"; ?>
    </div>
</div>