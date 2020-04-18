<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 08.04.2020
 * Time: 23:59
 */

include_once __DIR__ . "/../../common/Head.php";
?>

<div class="chapter-container">
    <div class="menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#modal-functions">Взаимодействие: alert, prompt, confirm</a></li>
            <li><a href="#if-else">Условные операторы: if, '?'</a></li>
            <li><a href="#logical-operators">Логические операторы</a></li>
            <li><a href="#cycles">Циклы while и for</a></li>
            <li><a href="#switch">Конструкция "switch"</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Основы JavaScript</h2>
        <? include_once __DIR__ . "/themes/ModalFunctions.php"; ?>
        <? include_once __DIR__ . "/themes/Conditions.php"; ?>
        <? include_once __DIR__ . "/themes/LogicalOperators.php"; ?>
        <? include_once __DIR__ . "/themes/Cycles.php"; ?>
        <? include_once __DIR__ . "/themes/Switch.php"; ?>
    </div>
</div>