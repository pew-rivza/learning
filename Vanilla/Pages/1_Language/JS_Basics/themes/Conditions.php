<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 11.04.2020
 * Time: 20:44
 */
?>

<script src="/Vanilla/Code/1_Language/JS_Basics/Conditions.js?<?= time();?>"></script>

<div class="theme">
    <h3 id="if-else">Условные операторы: if, '?'</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Используя условную конструкцию, написать код, который будет спрашивать:
        „Какое «официальное» название JavaScript?“. Если пользователь вводит
        «ECMAScript», то показать: «Верно!», в противном случае – отобразить:
        «Не знаете? ECMAScript!».

        <div class="header">Решение</div>
        <button onclick="getJSName()">Сыграть в JS-викторину</button>
    </div>

    <div class="task">
        <div class="header">Задача 2</div>
        Используя условную конструкцию, написать код, который получает число через prompt,
        а затем выводит "Число больше нуля", "Число меньше нуля" или "Число равно нулю"
        в зависимости от знака введенного числа.

        <div class="header">Решение</div>
        <button onclick="getNumberSign()">Узнать знак числа</button>
    </div>
</div>