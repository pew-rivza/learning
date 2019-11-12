<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 29.10.2019
 * Time: 21:53
 */
?>

<div class="chapter">
    <div class="chapter-name">Глава 3. Кофейные декорации</div>
    <div class="chapter-description">
        Те, кто интересуется осадками, всегда подписываются
        на  рассылку  газет,  чтобы  быть в курсе  событий.
        <br>
        ПАТТЕРН НАБЛЮДАТЕЛЬ -  используется,  когда многим
        объектам нужно  иметь доступ к  одинаковым данным.
        Примеры использования:  любые подписки  на каналы,
        паблики,     комментарии.     Паттерн     является
        поведенческим.<br><br>
        <div class="pattern-diagram">
            <img src="Chapters/assets/img/patternsDiagrams/Observer.png"
                 id="observer-diagram">
        </div>
    </div>
    <div class="chapter-expander" data-id="3">
        ↓ Показать пример
    </div>
    <div class="chapter-example" data-chapter="3">
        <?php include_once __DIR__ . "/CoffeeShopView.php"?>
    </div>
</div>