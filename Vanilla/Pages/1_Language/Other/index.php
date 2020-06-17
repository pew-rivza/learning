<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#proxy-n-reflect">Proxy и Reflect</a></li>
            <li><a href="#currying">Каррирование</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Разное</h2>
        <? include_once __DIR__ . "/themes/ProxyNReflect.php"; ?>
        <? include_once __DIR__ . "/themes/Currying.php"; ?>
    </div>
</div>