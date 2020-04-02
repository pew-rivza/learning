<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 14:36
 */

include_once __DIR__ . "/Pasture.php";

?>

<div class="pattern-card" id="adapter-pattern">
    <div class="name-block main-back-1 white-text">АДАПТЕР</div>
    <div class="description-block main-back-2 white-text">
        Структурный паттерн, позволяющий привести объекты, реализующие
        один интерфейс, к другому интерфейсу.
    </div>
    <div class="example-block additional-back-1 black-text">
        <ul>
            Когда использовать:
            <li>
                перевод данных из одного формата в другой, необходимый для сторонней библиотеки
            </li>
            <li>
                адаптация старого кода под новую библиотеку для работы с уведомлениями
            </li>
            <li>
                превращение уведомления на сайте в пуш-уведомление на телефон</li>
        </ul>
    </div>
    <div class="diagram-block additional-back-2 black-text">
        <img src="PageParts/assets/img/diagrams/adapter.png">
    </div>
    <div class="realisation-block main-back-3 red-text">
        <div>
            Задача: На одном пастбище пасется утка и индюшка.
            Необходимо помочь им найти общий язык при разных интерфейсах.<br><br>

            Результат:
            <?php Pasture::main(); ?>
        </div>
    </div>

    <div class="plus-minus-block main-back-2 white-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>адаптирует разные классы к одному интерфейсу</li>
                <li>позволяет изящно заставить объекты работать вместе постфактум</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>создание лишних классов</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/adapter.jpg">
    </div>
</div>
