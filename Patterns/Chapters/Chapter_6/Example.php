<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:56
 */

include_once __DIR__ . "/RemoteLoader.php";

?>

<div class="pattern-card" id="command-pattern">
    <div class="name-block main-back-1 white-text">КОМАНДА</div>
    <div class="description-block main-back-2 white-text">
        Поведенческий паттерн, оборачивающий команды от клиента
        в объекты, инкапулируя их реализацию и позволяя пдавать
        их в качестве аргумента.
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                элемент управления, который выполняет множество функций
            </li>
            <li>
                построение очереди запросов на скачивание или отправку файлов
            </li>
            <li>
                нужно реализовать отмену действий
            </li>
        </ul>
    </div>
    <div class="diagram-block additional-back-1 black-text">
        <img src="PageParts/assets/img/diagrams/command.png">
    </div>
    <div class="realisation-block additional-back-1 black-text">
        <div>
            Задача:<br>
            Есть пульт управления умным домом, в котором есть различные
            команды. Необходимо поуправлять умным домом (выполнить действие
            и отменить его).<br><br>

            Результат: <br>
            <?php RemoteLoader::main(); ?>
        </div>
    </div>

    <div class="plus-minus-block main-back-3 red-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>функционал отмены и очереди</li>
                <li>отделяет команды и исполнителей</li>
                <li>возможность собирать сложные команды из простых</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>создание множества классов</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/command.jpg">
    </div>
</div>

