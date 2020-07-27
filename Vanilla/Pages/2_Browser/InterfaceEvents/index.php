<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#mouse-events">Основы событий мыши</a></li>
            <li><a href="#mouse-moving">Движение мыши</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Интерфейсные события</h2>
        <? include_once __DIR__ . "/themes/MouseEvents.php"; ?>
        <? include_once __DIR__ . "/themes/MouseMoving.php"; ?>
    </div>
</div>