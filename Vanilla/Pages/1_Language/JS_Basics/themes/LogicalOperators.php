<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 13.04.2020
 * Time: 23:26
 */
?>

<script src="/Vanilla/Code/1_Language/JS_Basics/LogicalOperators.js"></script>

<div class="theme">
    <h3 id="logical-operators">Логические операторы</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Написать код, который будет спрашивать логин с помощью prompt. Если
        посетитель вводит «Админ», то prompt запрашивает пароль, если ничего
        не введено или нажата клавиша Esc – показать «Отменено», в противном
        случае отобразить «Я вас не знаю».<br>
        Пароль проверять так:<br>
        Если введён пароль «Я главный», то выводить «Здравствуйте!»,<br>
        Иначе – «Неверный пароль»,<br>
        При отмене – «Отменено».

        <div class="header">Решение</div>
        <button onclick="login();">Войти</button>
    </div>
</div>
