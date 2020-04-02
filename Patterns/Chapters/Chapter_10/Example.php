<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 21:43
 */

include_once __DIR__ . "/Market.php";
?>

<div class="pattern-card" id="state-pattern">
    <div class="name-block main-back-1 white-text">СОСТОЯНИЕ</div>
    <div class="description-block additional-back-1 black-text">
        Поведенческий паттерн, реализующий конечный автомат. В зависимости
        от состояния объекта меняется его поведение.
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                процесс публикования постов на форумах
            </li>
            <li>
                изменение контактной формы в зависимости от ответа пользователя
            </li>
        </ul>
    </div>
    <div class="diagram-block additional-back-2 black-text">
        <img src="PageParts/assets/img/diagrams/state.png">
    </div>
    <div class="realisation-block main-back-2 white-text">
        <div>
            Задача: Есть автомат по выдаче шариков, поведение которого
            необходимо реализовать. Нужно вытащить все шарики, а потом
            заполнить автомат новыми.<br><br>

            Результат:<br><br>
            <div class="gumball-machine">
                <?php Market::main(); ?>
            </div>
        </div>
    </div>

    <div class="plus-minus-block main-back-3 red-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>избавляет от условных операторов</li>
                <li>делает код контекта проще</li>
                <li>грамотно структурирует код</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>усложняет код, если состояний мало, и изменяются они редко</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/state.jpg">
    </div>
</div>
