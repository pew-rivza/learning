<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#focus-n-blur">Фокусировка: focus/blur</a></li>
            <li><a href="#form-elements-events">События: change, input, cut, copy, paste</a></li>
            <li><a href="#submit">Отправка формы: событие и метод submit</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Формы, элементы управления</h2>
        <? include_once __DIR__ . "/themes/FocusNBlur.php"; ?>
        <? include_once __DIR__ . "/themes/FormElementsEvents.php"; ?>
        <? include_once __DIR__ . "/themes/Submit.php"; ?>
    </div>
</div>