<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 29.10.2019
 * Time: 21:53
 */

include_once __DIR__ . "/CoffeeShop.php";
?>

<div class="pattern-card" id="decorator-pattern">
    <div class="name-block main-back-1 white-text">ДЕКОРАТОР</div>
    <div class="description-block additional-back-1 black-text">
        Структурный паттерн, позволяющий начинять объект потернциально
        бесконечным количеством функционала за счет "оберток".
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                применение нескольких способов отправки оповещения
                одному пользователю
            </li>
            <li>
                применение различных форматов к тексту
            </li>
            <li>
                добавление дополнений при заказе еды через доставку
            </li>
        </ul>
    </div>
    <div class="diagram-block main-back-3 red-text">
        <img src="PageParts/assets/img/diagrams/decorator.png">
    </div>
    <div class="realisation-block main-back-2 white-text">
        <div>
            Задача:<br>
            Необходимо заказать в кофейне эспрессо с мороженным
            и миндалем, а затем латте с шоколадом и маршмеллоу. Вывести цену
            на каждый заказ.<br><br>

            Результат: <br>
            <?php CoffeeShop::main(); ?>

        </div>
    </div>

    <div class="plus-minus-block additional-back-3 black-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>гибкость в добавлении нового функционала</li>
                <li>добавление нескольких характеристик одному объекту</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>куча маленьких классов</li>
                <li>сложность с большим композиционным рядом</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/decorator.jpg">
    </div>
</div>