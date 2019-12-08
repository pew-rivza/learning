<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 08.12.2019
 * Time: 16:40
 */

include_once __DIR__ . "/PizzaMaker.php";
?>

<div class="pattern-card" id="factory-pattern">
    <div class="name-block main-back-1 white-text">АБСТРАКТНАЯ ФАБРИКА</div>
    <div class="description-block main-back-3 red-text">
        Порождающий паттерн, позволяющий скрыто создавать семейства
        объектов, реализующих соответсвующие интерфейсы.
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                реализация структруры ассортимента магазина, ресторана и т.д.
            </li>
            <li>
                отображение одних и тех же элементов интерфейса для разных пользователей
            </li>
        </ul>
    </div>
    <div class="diagram-block additional-back-1 black-text">
        <img src="PageParts/assets/img/diagrams/factory.png">
    </div>
    <div class="realisation-block additional-back-3 black-text">
        <div>
            Задача:<br>
            Сделать заказ Сырной пиццы и пиццы Карбонара в двух пицериях -
            в Нью-Йорке и в Чикаго.<br><br>

            Результат: <br>
            <?php PizzaMaker::main(); ?>

        </div>
    </div>

    <div class="plus-minus-block additional-back-1 black-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>создание конкретных объектов скрыто от клиента</li>
                <li>клиент создает объекты в пределах одной фабрики (сочетаемость объектов)</li>
                <li>легкость добавления новых семейств продуктов</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>сложная структура кода</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/factory.jpg">
    </div>
</div>
