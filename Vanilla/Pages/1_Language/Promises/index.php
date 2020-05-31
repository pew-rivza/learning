<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#callbacks">Введение: колбэки</a></li>
            <li><a href="#promises">Промисы</a></li>
            <li><a href="#async-await">Async/await</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Промисы, async/await</h2>
        <? include_once __DIR__ . "/themes/CallbacksIntro.php"; ?>
        <? include_once __DIR__ . "/themes/Promises.php"; ?>
        <? include_once __DIR__ . "/themes/AsyncAwait.php"; ?>
    </div>
</div>