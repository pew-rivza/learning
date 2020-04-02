<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 15:08
 */

include_once __DIR__ . "/Restaurant.php";
?>

<div class="pattern-card" id="iterator-pattern">
    <div class="name-block main-back-1 white-text">ИТЕРАТОР</div>
    <div class="description-block additional-back-1 black-text">
        Поведенческий паттерн, предоставляющий интерфейс для преебора
        различных коллекций с целью инкапсуляции их истинных методов
        перебора.
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                вывод элеметов меню в онлайн-доставке или просто меню сайта
            </li>
            <li>
                вывод разных тулбаров для разных страниц
            </li>
            <li>
                реализация разных вариантов обхода дерева
            </li>
        </ul>
    </div>
    <div class="diagram-block main-back-3 red-text">
        <img src="PageParts/assets/img/diagrams/iterator.png">
    </div>
    <div class="realisation-block main-back-2 white-text">
        <div>
            Задача:<br>
            Вывести меню двух кафе с разными типами коллекций.
            <br><br>

            Результат: <br>
            <?php Restaurant::main(); ?>

        </div>
    </div>

    <div class="plus-minus-block additional-back-3 black-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>позволяет соединить разные методы обхода структур данных</li>
                <li>упрощает классы с данными</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>не подходит для совсем простых структур данных, где достаточно цикла</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/iterator.jpg">
    </div>
</div>
