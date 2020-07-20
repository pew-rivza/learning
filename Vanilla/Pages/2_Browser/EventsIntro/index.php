<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#browser-events">Введение в браузерные события</a></li>
            <li><a href="#event-delegation">Делегирование событий</a></li>
            <li><a href="#default-browser-actions">Действия браузера по умолчанию</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Введение в события</h2>
        <? include_once __DIR__ . "/themes/BrowserEvents.php"; ?>
        <? include_once __DIR__ . "/themes/EventDelegation.php"; ?>
        <? include_once __DIR__ . "/themes/DefaultBrowserActions.php"; ?>
    </div>
</div>