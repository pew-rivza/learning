<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:57
 */

include_once __DIR__ . "/HomeTheater.php";
?>

<div class="pattern-card" id="facade-pattern">
    <div class="name-block main-back-1 white-text">ФАСАД</div>
    <div class="description-block main-back-3 red-text">
        Структурный паттерн, позволяющий упростить интерфейс сложной
        системы путем предоставления клиенту сложных
        фунуций, составленных из простых.
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                отделение безнес-логики приложения от реализации
                используемого в нем фреймворка
            </li>
            <li>
                выделение клиенту только нужного функционала из библиотеки
                для сжатия видео
            </li>
            <li>
                упрощение API Youtube
            </li>
            <li>
                разложение функционала сложной библиотеки на слои
            </li>
        </ul>
    </div>
    <div class="diagram-block additional-back-2 black-text">
        <img src="PageParts/assets/img/diagrams/facade.png">
    </div>
    <div class="realisation-block additional-back-1 black-text">
        <div>
            Задача: Есть сложная система "Домашний кинотеатр". Необходимо упростить
            его интерфейс, реализовав только функции для просмотра фильмов.<br><br>

            Результат:
            <?php HomeTheater::main(); ?>
        </div>
    </div>

    <div class="plus-minus-block main-back-2 white-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>предоставляет клиенту строго необходимый функционал</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>с помощью него легко реализовать антипаттерн "божественный объект"</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/facade.jpg">
    </div>
</div>