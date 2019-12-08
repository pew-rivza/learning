<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 08.08.2019
 * Time: 23:43
 */

include_once __DIR__ . "/DuckGame.php";
?>

<div class="pattern-card" id="strategy-pattern">
    <div class="name-block main-back-1 white-text">СТРАТЕГИЯ</div>
    <div class="description-block additional-back-1 black-text">
        Поведенческий паттерн, позволяющий создать несколько алгоритмов
        одного и того же действия и взаимозаменять их динамически.
    </div>
    <div class="example-block main-back-3 red-text">
        <ul>
            Когда использовать:
            <li>
                отправка сообщения разными способами (по почте, в мессенджере,
                по смс и т.д)
            </li>
            <li>
                выбор способа прохождения маршрута (пешком, на машине, на
                общественном транспорте и т.д.)
            </li>
            <li>выбор арифметической операции</li>
        </ul>
    </div>
    <div class="diagram-block additional-back-2 black-text">
        <img src="PageParts/assets/img/diagrams/strategy.png">
    </div>
    <div class="realisation-block main-back-2 white-text">
        <div>
            Задача: eсть живая утка из пруда, деревянная декоративная
            утка и резиновая уточка для ванны. Каждой из них необходимо
            задать способ кряканья и полета.<br><br>

            Результат:
            <?php DuckGame::main(); ?>
        </div>
    </div>

    <div class="plus-minus-block main-back-2 white-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>алгоритмы изолированы и взаимозаменяемы</li>
                <li>для выполнения алгоритма используется делегирование</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>нужно понимать разницу между стратегиями</li>
                <li>каждый алгоритм - это отдельный класс</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/strategy.jpg">
    </div>
</div>
