<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 03.01.2020
 * Time: 21:09
 */

include_once __DIR__ . "/ChocoFactory.php";
?>

<div class="pattern-card" id="singleton-pattern">
    <div class="name-block main-back-1 white-text">ОДИНОЧКА</div>
    <div class="description-block main-back-2 white-text">
        Порождающий паттерн, гарантирующий, что класс имеет только
        один экземпляр, и что доступ к нему глобальный (за счет изменения
        уровня доступа к конструктору и ввода статического метода).
    </div>
    <div class="example-block main-back-2 white-text">
        <ul>
            Когда использовать:
            <li>
                открытие единственного потока для работы с БД
            </li>
            <li>
                создание модального окна
            </li>
            <li>
                написание класса для уникального аппарата на фабрике
            </li>
            <li>
                совместное использование хранилищ конфигурации, логов и т.д.
            </li>
        </ul>
    </div>
    <div class="diagram-block additional-back-1 black-text">
        <img src="PageParts/assets/img/diagrams/singleton.png">
    </div>
    <div class="realisation-block additional-back-3 black-text">
        <div>
            Задача:<br>
            На фабрике есть станок, делающий горячий шоколад. Необходимо
            прописать функционал для его работы, а также обеспечить уникальность
            этого аппарата.<br><br>

            Результат: <br>
            <?php ChocoFactory::main(); ?>
        </div>
    </div>

    <div class="plus-minus-block main-back-3 red-text">
        <div>
            <ul class="pluses">
                Плюсы:
                <li>гарантия единственного экземпляра</li>
                <li>глобальная точка доступа</li>
                <li>отложенная инициализация объекта</li>
            </ul>
            <ul class="minuses">
                Минусы:
                <li>нарушение принципа единственной обязанности</li>
                <li>сложности в реализации многопоточности</li>
            </ul>
        </div>
    </div>
    <div class="decoration-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/singleton.jpg">
    </div>
    <div class="decoration2-block additional-back-3 black-text">
        <img src="PageParts/assets/img/decorations/singleton2.jpg">
    </div>
</div>
