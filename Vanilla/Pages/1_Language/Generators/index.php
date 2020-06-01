<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#generators">Генераторы</a></li>
            <li><a href="#async-generators">Асинхронные итераторы и генераторы</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Генераторы, продвинутая итерация</h2>
        <? include_once __DIR__ . "/themes/Generators.php"; ?>
        <? include_once __DIR__ . "/themes/AsyncGenerators.php"; ?>
    </div>
</div>