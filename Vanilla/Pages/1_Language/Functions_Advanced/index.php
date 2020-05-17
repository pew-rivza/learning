<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#recursion-n-stack">Рекурсия и стек</a></li>
            <li><a href="#closure">Замыкание</a></li>
            <li><a href="#decorators-call-apply">Декораторы и переадресация вызова, сall/apply</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Продвинутая работа с функциями</h2>
        <? include_once __DIR__ . "/themes/RecursionNStack.php"; ?>
        <? include_once __DIR__ . "/themes/Closure.php"; ?>
        <? include_once __DIR__ . "/themes/DecoratorsCallApply.php"; ?>
    </div>
</div>
