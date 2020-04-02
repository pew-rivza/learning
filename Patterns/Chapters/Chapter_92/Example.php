<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 15:08
 */

include_once __DIR__ . "/CompRestaurant.php";
?>

<div class="pattern-card" id="composite-pattern">
    <div class="name-block main-back-1 white-text">КОМПОНОВЩИК</div>
    <div class="description-block main-back-3 red-text">
        Структурный паттерн, позволяющий работать с группами компонентов,
        объединенными в древовидную структуру данных, как с единым целым.
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                реализация составной формы на сайте
            </li>
            <li>
                работа с DOM-деревом
            </li>
        </ul>
    </div>
    <div class="diagram-block additional-back-1 black-text">
        <img src="PageParts/assets/img/diagrams/composite.png">
    </div>
    <div class="realisation-block additional-back-3 black-text">
        <div>
            Задача:<br>
            Вывести полное меню ресторана (с подменю).<br><br>

            Результат: <br>
            <div class="composite-menu">
                <?php CompRestaurant::main(); ?>
            </div>

        </div>
    </div>

    <div class="plus-minus-block additional-back-1 black-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>упрощает взаимодействие с древовидными структурами засчет рекурсии</li>
                <li>упрощает добавление новых компонентов в дерево</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>слишком обобщает узлы и листья</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/composite.jpg">
    </div>
</div>
