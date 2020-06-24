<?php

include_once __DIR__ . "/../../common/Head.php";
include_once __DIR__ . "/../../common/Menu.php";
?>

<div class="chapter-container">
    <div class="sub-menu">
        <h3>Навигация</h3>
        <ul>
            <li><a href="#document-changing">Изменение документа</a></li>
            <li><a href="#styles-n-classes">Стили и классы</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Документ</h2>
        <? include_once __DIR__ . "/themes/DocumentChanging.php"; ?>
        <? include_once __DIR__ . "/themes/StylesNClasses.php"; ?>
    </div>
</div>