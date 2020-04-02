<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 18:29
 */

include_once __DIR__ . "/Starboops.php";
?>

<div class="pattern-card" id="template-method-pattern">
    <div class="name-block main-back-1 white-text">ШАБЛОННЫЙ МЕТОД</div>
    <div class="description-block additional-back-1 black-text">
        Поведенческий паттерн, предоставляющий шаблон алгоритма и позволяющий
        классам-потомкам реализовывать несколько шагов этого алгоритма.
    </div>
    <div class="example-block additional-back-3 black-text">
        <ul>
            Когда использовать:
            <li>
                реализация алгоритма сортировки для разных объектов
            </li>
            <li>
                реализация парсера различных форматов документов
            </li>
            <li>
                реализация алгоритма отправки сообщения в различных соцсетях
            </li>
            <li>
                логирование действий в онлайн-сервисе
            </li>
        </ul>
    </div>
    <div class="diagram-block main-back-3 red-text">
        <img src="PageParts/assets/img/diagrams/template_method.png">
    </div>
    <div class="realisation-block additional-back-3 black-text">
        <div>
            Задача: кофейне нужен алгоритм для приготовления напитка.
            Они могут готовить чай, кофе и глинтвейн. Алгоритмы похожи с небольшими
            отличиями.<br><br>

            Результат:<br><br>
            <?php Starboops::main(); ?>

        </div>
    </div>

    <div class="plus-minus-block main-back-2 white-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>исключает дублирование кода</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>скелет алгоритма обеспечивает жесткую структуру</li>
                <li>подходит для алгоритмов с небольшим количеством шагов</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/template_method.jpg">
    </div>
</div>