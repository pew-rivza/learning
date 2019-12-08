<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.09.2019
 * Time: 20:14
 */

include_once __DIR__ . "/WeatherStation.php";
?>

<div class="pattern-card" id="observer-pattern">
    <div class="name-block main-back-1 white-text">НАБЛЮДАТЕЛЬ</div>
    <div class="description-block additional-back-1 black-text">
        Поведенческий паттерн, реализовывающий механизм подписки
        и позволяющий многим объектам следить за одним субъектом.
    </div>
    <div class="example-block additional-back-3 black-text">
        <ul>
            Когда использовать:
            <li>
                подписка на новостную ленту сайта
            </li>
            <li>
                подписка на карточки задач
            </li>
            <li>
                добавление отсутсвующих товаров в интернет-магазине в лист ожидания
            </li>
            <li>
                логирование действий в онлайн-сервисе
            </li>
            <li>
                реакция приложения на нажатие кнопки
            </li>
        </ul>
    </div>
    <div class="diagram-block main-back-3 red-text">
        <img src="PageParts/assets/img/diagrams/observer.png">
    </div>
    <div class="realisation-block main-back-2 white-text">
        <div>
            Задача: существует погодная станция, собирающая данные
            о температуре, влажности, давлении и тепловом индексе.
            Необходимо вывести эти значения, а затем вывести еще раз,
            когда данные изменятся.<br><br>

            Результат:
            <?php WeatherStation::main(); ?>

        </div>
    </div>

    <div class="plus-minus-block main-back-2 white-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>динамическая подписка и отписка</li>
                <li>субъекту не нужно знать, кто и сколько на него подписано</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>случайный порядок оповещения наблюдателей</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/observer.jpg">
    </div>
</div>